<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Image;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('carousels.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
            'image' =>  $this->uploadImage($request->file('image'))
        ];

        Carousel::create($data);

        return redirect()
            ->route('carousels.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Carousel $carousel)
    {
        return view('carousels.edit', compact('carousel'));
    }

    public function update(Request $request,Carousel $carousel)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
        ];

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $carousel->update($data);

        return redirect()
            ->route('carousels.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Carousel $carousel)
    {
        return view('carousels.show', compact('carousel'));
    }

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()
            ->route('carousels.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $carousels = Carousel::onlyTrashed()->get();
        return view('carousels.trash', compact('carousels'));
    }

    public function restore($id)
    {
        $carousel = Carousel::onlyTrashed()->find($id);
        $carousel->restore();

        return redirect()
            ->route('carousels.trash')
            ->withMessage('Restored Successfully!');
    } 

    public function delete($id)
    {
        $carousel = Carousel::onlyTrashed()->find($id);
        $carousel->forceDelete();

        return redirect()
            ->route('carousels.trash')
            ->withMessage('Deleted Successfully!');
    } 

    public function downloadPdf()
    {
        $carousels = Carousel::all();
        $pdf = Pdf::loadView('carousels.pdf', compact('carousels'));
        return $pdf->download('carousel-list.pdf');
    }

    public function uploadImage($file){
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/carousels'), $fileName);

        Image::make($file)
                ->resize(1600, 500)
                ->save(storage_path() . '/app/public/carousels/' . $fileName);

        return $fileName;
    }
}
