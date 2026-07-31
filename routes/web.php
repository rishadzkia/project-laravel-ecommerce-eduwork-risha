<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halaman Home';
});

Route::resource('products',ProductController::class);
Route::get('/cart', function(){
    return 'Halaman Cart';
});
Route::get('/checkout', function(){
    return 'Halaman Checkout';
});