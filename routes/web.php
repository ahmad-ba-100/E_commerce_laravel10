<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});
// Route product
Route::get('/boutique', [ProductController::class, 'index'])->name('product.index');
Route::get('product/show/{slug}', [ProductController::class, 'show'])->name('product.show');
// Route cart
Route::post('panier/ajouter', [CartController::class, 'store'])->name('cart.store');
