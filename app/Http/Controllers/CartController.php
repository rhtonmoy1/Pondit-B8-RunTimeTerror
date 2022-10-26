<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $product->carts()->create([
            'user_id' => Auth::id(),
            'qty' => 1
        ]);

        return redirect()->back();
    }
}
