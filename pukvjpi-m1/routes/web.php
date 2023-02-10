<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ProductController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductController::class, 'about'])->name('aboutslider');

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'catalog']);
Route::get('/where', [App\Http\Controllers\WhereController::class, 'where']);

Route::get('/catalog/sort/{name}/{nap}',[App\Http\Controllers\CatalogController::class, "sort"]  );
Route::get('/catalog/filtr/{idCat}',[App\Http\Controllers\CatalogController::class, "prodCat"] );
Route::get('/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('product');

