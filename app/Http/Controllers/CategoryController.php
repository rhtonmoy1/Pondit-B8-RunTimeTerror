<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
            'image' =>  $this->uploadImage($request->file('image'))
        ];

        Category::create($data);

        return redirect()
            ->route('categories.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request,Category $category)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
        ];

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $category->update($data);

        return redirect()
            ->route('categories.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('categories.trash', compact('categories'));
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();

        return redirect()
            ->route('categories.trash')
            ->withMessage('Restored Successfully!');
    } 

    public function delete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();

        return redirect()
            ->route('categories.trash')
            ->withMessage('Deleted Successfully!');
    } 

    public function downloadPdf()
    {
        $categories = Category::all();
        $pdf = Pdf::loadView('categories.pdf', compact('categories'));
        return $pdf->download('category-list.pdf');
    }

    public function uploadImage($file){
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
                ->resize(200, 200)
                ->save(storage_path() . '/app/public/categories/' . $fileName);

        return $fileName;
    }
}
