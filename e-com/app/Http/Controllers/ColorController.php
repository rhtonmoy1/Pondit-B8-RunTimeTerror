<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class ColorController extends Controller
{
    public function index(){
      

      $colors = Color::all();

      return view('admin.colors.index', [
          'data' =>$colors
      ]);

     }


     public function create(){
        return view('admin.colors.create');
     }



     public function store(Request $request){


      $validator =  Validator::make($request->all(), [
          'title' => 'required|unique:colors|max:255|min:3',
        
       
         
      ]);

      if ($validator->fails()) {
          return back()
                      ->withErrors($validator)
                      ->withInput();
      }

     Color::create([
      'title' =>$request->title,
      'color_code' =>$request->color_code, 
     ]);
     return redirect()
     ->route('colors.index')
     ->withMessage('Created Successfully!');
   //   return Redirect() ->route('admin.colors.index');

      }

      public function show($id){
         $colorsshowdata = Color::find($id);
         return view('admin.colors.show', compact('colorsshowdata'));
      }


     public function trash(){
        return view('admin.colors.trash');
     }
     
}
