<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $cart = Cart::firstOrNew(['product_id' => $productId]);
        $cart->quantity++;
        $cart->save();

        return redirect()->back()->with('Успешно', 'Товар добавлен в корзину успешно.');
    }
    // public function addToCart(Request $request, $productId)
    // {
    //     $cart = Cart::where('product_id',$productId)->get();
    //     if($cart[0] -> quantity <1){
    //         $cart[0]
    //     }
    //     $cart[0]->quantity++;
    //     $cart[0]->save();

    //     return redirect()->back()->with('Успешно', 'Товар добавлен в корзину успешно.');
    // }


    public function addOnCart(Request $request, $productId)
    {

        $cart = Cart::where('product_id', "=",$productId)->get();
        $cart[0]->quantity++;
        $cart[0]->save();

        return redirect('/cart');
    }


    public function removeFromCart($productId)
    {
        $cart = Cart::where(['product_id' => $productId]) -> get();
        $cart[0] -> quantity--;
        if($cart[0] ->quantity < 1){
            $cart[0] -> delete();
        }
        else{
            $cart[0] -> save();
        }
        return redirect('/cart');
    }

    public function removeAllFromCart($productId)
    {
        $cart = Cart::find($productId);
        $cart -> delete();
        return redirect('/cart');
    }

    public function showCart()
    {
        $carts = Cart::with('product')->get();

        return view('cart', compact('carts'));
    }
}
