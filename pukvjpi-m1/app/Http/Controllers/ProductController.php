<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(product $product)
    {
        return view('product', compact('product'), ['title' => 'Товар | Copy Star']);
    }
    public function about(){
        $five = request('desc', 'created_at');
        $products = product::orderBy($five)->limit(5)->get();
        return view('home', compact('products'));
    }
}
