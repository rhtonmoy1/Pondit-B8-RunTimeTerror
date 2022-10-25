<?php

namespace App\Http\Controllers;

use App\Http\Requests\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.index', compact('sizes'));
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(SizeRequest $request)
    {

        // dd($request->all());

        $data = [
            'size' => $request->size,
            
        ];

        size::create($data);

        return redirect()
            ->route('sizes.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Size $size)
    {
        return view('admin.sizes.edit', compact('size'));
    }

    public function update(SizeRequest $request,Size $size)
    {
        $data = [
            'size' => $request->size,
        ];

        $size->update($data);

        return redirect()
            ->route('sizes.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Size $size)
    {
        return view('admin.sizes.show', compact('size'));
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()
            ->route('sizes.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $sizes = Size::onlyTrashed()->get();
        return view('admin.sizes.trash', compact('sizes'));
    }

    public function restore($id)
    {
        $size = Size::onlyTrashed()->find($id);
        $size->restore();

        return redirect()
            ->route('sizes.trash')
            ->withMessage('Restored Successfully!');
    }

    public function delete($id)
    {
        $size = Size::onlyTrashed()->find($id);
        $size->forceDelete();

        return redirect()
            ->route('sizes.trash')
            ->withMessage('Deleted Successfully!');
    }
}
