<?php

namespace App\Http\Controllers;

use App\Models\c;
use Illuminate\Http\Request;

class WhereController extends Controller
{
    public function where()
    {
        return view('where', ['title' => 'Где нас найти? | Copy Star']);
    }
}
