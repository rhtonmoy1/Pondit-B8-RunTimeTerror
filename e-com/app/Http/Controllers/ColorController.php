<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        return view('admin.colors.index');
     }

     public function create(){
        return view('admin.colors.create');
     }
     public function trash(){
        return view('admin.colors.trash');
     }
     
}
