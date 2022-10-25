<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){

        // $users = User::latest()->paginate(2);
        $brandData=Brand::latest()->paginate(5);
    //  $brandData=Brand::all();
        return view('admin.brands.index',compact('brandData'));
    //   return view('admin.brands.index');
      }

    public function create(){
        // dd('createpage ');
        return view('admin.brands.create');
    }

    
    public function store(Request $brandrquest){
            // dd('gggg');

        Brand::create([
            'name'=> $brandrquest->name,
        ]);
        return Redirect()-> route ('brands.index');

        }


        public function show($id){
            // dd('show  page hobe ');
            $brandShow=Brand::find($id);
            return view('admin.brands.show', compact('brandShow'));
        }

        

        public function edit($id){
            // dd('edit hobe');
        
            $brandEdit = Brand::find($id);
            return view('admin.brands.edit', compact('brandEdit'));
          }


         public function update(Request $brandRequest, $id){

            $brandupdate = Brand::find($id);
        
            $data = [
               'name'=>$brandRequest->name
            ];
        
            $brandupdate->update($data);
        
            return Redirect()-> route ('brands.index');
        
           }  

           public function delete($id){


            $BrandDelete =Brand::find($id);
            $BrandDelete ->delete();
            Session::flash('message', 'successfuly delete');
            return Redirect()-> route ('brands.index');
        
        }
        


}
