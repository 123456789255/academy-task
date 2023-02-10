<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function catalog()
    {
        $sort = request('sort', 'name');
        $products = product::orderBy($sort)->get();
        return view('catalog', compact('products'), ['title' => 'Каталог | Copy Star']);
    }
}
