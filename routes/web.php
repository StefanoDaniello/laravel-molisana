<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/products', [ProductController::class,'index'])->name('products.index');
// Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');
// Route::get('/products', [ProductController::class, 'search'])->name('search');

Route::resource('products', ProductController::class);
Route::resource('recipes', RecipeController::class);
