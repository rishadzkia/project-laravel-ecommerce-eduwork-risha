<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::resource('products', ProductController::class);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/checkout', function(){
    return 'Halaman Checkout';
});