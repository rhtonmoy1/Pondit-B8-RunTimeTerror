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
          




      public function edit($id){

         $coloredit = Color::find($id);
         return view('admin.colors.edit', compact('coloredit'));
     }



     public function update(Request $formequest, $id){

      $colorUpdate = Color::find($id);
  
      $data = [
  
        // 'category_id'=>$formequest->category_id,
  
         'title'=>$formequest->title,
         'color_code'=>$formequest->color_code,
      ];

      $colorUpdate->update($data);
      return Redirect()-> route ('colors.index');
  
     }


      public function  delete ($id){
         $colorsdelete = Color::find($id);
         $colorsdelete ->delete();
         Session::flash('messege',' successfully delete');
   
       return Redirect() ->route('colors.index');
   
   
        }


   //   public function trash(){
   //      return view('admin.colors.trash');

   //   }
   public function trash()
   {
       $colors = Color::onlyTrashed()->get();
       return view('admin.colors.trash', compact('colors'));
   }

   public function restore($id)
   {
       $color = Color::onlyTrashed()->find($id);
       $color->restore();

       return redirect()
           ->route('colors.trash')
           ->withMessage('Restored Successfully!');
   } 

   public function tdelete($id)
   {
       $color = Color::onlyTrashed()->find($id);
       $color->forceDelete();

       return redirect()
           ->route('colors.trash')
           ->withMessage('Deleted Successfully!');
   } 
     
}
