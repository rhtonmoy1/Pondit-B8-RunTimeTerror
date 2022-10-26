<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $paginatePerPage = 20;
        $serialNo = 1;
        if($pageNumber = request('page')){
            $serialNo = $paginatePerPage * ($pageNumber-1) + 1;
        }
        
        $products = Product::with('category')->latest()->paginate($paginatePerPage);
        return view('products.index', compact('products', 'serialNo'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id')->toArray();
        $colors = Color::pluck('title', 'id')->toArray();

        return view('products.create', compact('categories', 'colors'));
    }

    public function store(ProductRequest $request)
    {
        
        $data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'is_active' => $request->is_active ? true : false,
            'description' => $request->description,
            'image' =>  $this->uploadImage($request->file('image'))
        ];

        $product = Product::create($data);

        $product->colors()->attach($request->colors);

        return redirect()
            ->route('products.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id')->toArray();
        $colors = Color::pluck('title', 'id')->toArray();

        $selectedColors = $product->colors()->pluck('id')->toArray(); 

        return view('products.edit', compact('product', 'categories', 'colors', 'selectedColors'));
    }

    public function update(ProductRequest $request,Product $product)
    {
        $data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'is_active' => $request->is_active ? true : false,
            'description' => $request->description,
        ];

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $product->update($data);

        $product->colors()->sync($request->colors);

        return redirect()
            ->route('products.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
            ->route('products.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('products.trash', compact('products'));
    }

    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();

        return redirect()
            ->route('products.trash')
            ->withMessage('Restored Successfully!');
    } 

    public function delete($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->colors()->detach();
        $product->forceDelete();

        return redirect()
            ->route('products.trash')
            ->withMessage('Deleted Successfully!');
    } 

    public function downloadPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('products.pdf', compact('products'));
        return $pdf->download('Product-list.pdf');
    }

    public function uploadImage($file){
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/products'), $fileName);

        Image::make($file)
                ->resize(200, 200)
                ->save(storage_path() . '/app/public/products/' . $fileName);

        return $fileName;
    }
}
