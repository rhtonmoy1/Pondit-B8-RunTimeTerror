<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.products.index');
    }

    public function create(){
        return view('admin.products.create');
    }
    public function trash(){
        return view('admin.products.trash');
    }
}

