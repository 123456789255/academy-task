<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use App\Models\Cart;

class ProductController extends Controller
{
    /**
     * Add product to cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, Product $product)
    {
        $cart = Cart::firstOrNew(['user_id' => auth()->id(), 'product_id' => $product->id]);
        $cart->quantity += $request->input('quantity', 1);
        $cart->save();

        return back()->withSuccess("{$product->name} was added to cart.");
    }

    public function show(product $product)
    {
        return view('product', compact('product'));
    }

    public function about (){
        $products = Product::orderBy('created_at', 'desc')->limit(5)->get();
        return view('welcome', compact('products'));
    }
}
