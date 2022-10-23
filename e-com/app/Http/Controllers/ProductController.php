<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){

    // dd('thids is products page ');
    return view('admin.products.index');
  }

  public function create(){

    // dd('thids is products page ');
    return view('admin.products.create');
  }

  public function trash(){

    // dd('thids is products page ');
    return view('admin.products.trash');
  }
}
