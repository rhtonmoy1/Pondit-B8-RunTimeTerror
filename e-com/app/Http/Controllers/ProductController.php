<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('admin.products.index',[
            'pdata'=> $products
        ]);

        // return  view('admin.products.index');
     }




    public function create(){
        return view('admin.products.create');
    }

    
    public function store(Request $formequest){

        $data = [
            'title'=>$formequest->title,
            'description'=>$formequest->description,
            'price'=>$formequest->price,
      ];
      
      $product = Product::create($data);
      
         return Redirect()-> route ('products.index');
      
        }
      
        
     public function Prodectshow($id){

        $productdata = Product::find($id);
        return view('admin.products.show', compact('productdata'));
    }

   
    public function edit($id){

        $product = Product::find($id);
    
        return view('admin.products.edit', compact('product'));
    }
  

    public function update(Request $formequest, $id){

        $product = Product::find($id);
    
        $data = [
    
          // 'category_id'=>$formequest->category_id,
    
           'title'=>$formequest->title,
           'description'=>$formequest->description,
           'price'=>$formequest->price,
        ];
    
        $product->update($data);
        return Redirect()-> route ('products.index');
    
       }



    public function delete($id){


        $ProductDelete =Product::find($id);
        $ProductDelete ->delete();
        Session::flash('message', 'successfuly delete');
        return Redirect()-> route ('products.index');
    
    }
        


    public function trash(){
        $pdata = Product::onlyTrashed()->get();
        return view('admin.products.trash', compact('pdata'));
    
        }

        public function restore($id){
            $pdata = Product::onlyTrashed()->find($id);
            $pdata ->restore();
            Session::flash('messege',' successfully restore');
        
          return Redirect() ->route('products.trash');
        
         }

         public function Tdelete($id){
            $pdatadelete = Product:: onlyTrashed()-> find($id);
            // $product->colors()->detach();
        
            // $product->colors->dattach();
        
           $pdatadelete->forceDelete();
        
            Session::flash('messege',' successfully delete');
        
          return Redirect() ->route('products.trash');
        
        
           }
}

