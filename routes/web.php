<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halaman Home';
});

Route::get('/products', function(){
    return 'Halaman Product';
});
Route::get('/cart', function(){
    return 'Halaman Cart';
});
Route::get('/checkout', function(){
    return 'Halaman Checkout';
});