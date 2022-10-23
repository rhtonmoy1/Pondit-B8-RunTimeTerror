<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function index(){
   return view('admin.categories.index');
 }

 public function create(){
    return view('admin.categories.create');
  }
  public function trash(){
    return view('admin.categories.trash');
  }

}
