<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        return view('welcome', ['title' => 'О нас | Copy Star']);
    }
}
