<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function product()
    {
        return view('frontend.product');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    public function why()
    {
        return view('frontend.why');
    }

    public function about()
    {
        return view('frontend.about');
    }
    
}
