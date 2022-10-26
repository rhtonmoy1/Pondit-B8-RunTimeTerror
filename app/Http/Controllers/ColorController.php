<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColorRequest;
use App\Models\Color;
use Barryvdh\DomPDF\Facade\Pdf;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        return view('colors.create');
    }

    public function store(ColorRequest $request)
    {
        $data = [
            'title' => $request->title,
            'color_code' => $request->color_code,
        ];

        Color::create($data);

        return redirect()
            ->route('colors.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    public function update(ColorRequest $request, Color $color)
    {
        $data = [
            'title' => $request->title,
            'color_code' => $request->color_code,
        ];

        $color->update($data);

        return redirect()
            ->route('colors.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Color $color)
    {
        return view('colors.show', compact('color'));
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()
            ->route('colors.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $colors = Color::onlyTrashed()->get();
        return view('colors.trash', compact('colors'));
    }

    public function restore($id)
    {
        $color = Color::onlyTrashed()->find($id);
        $color->restore();

        return redirect()
            ->route('colors.trash')
            ->withMessage('Restored Successfully!');
    } 

    public function delete($id)
    {
        $color = Color::onlyTrashed()->find($id);
        $color->forceDelete();

        return redirect()
            ->route('colors.trash')
            ->withMessage('Deleted Successfully!');
    } 

    public function downloadPdf()
    {
        $colors = Color::all();
        $pdf = Pdf::loadView('colors.pdf', compact('colors'));
        return $pdf->download('Color-list.pdf');
    }

}
