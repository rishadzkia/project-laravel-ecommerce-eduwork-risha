<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
   public function index()
   {
    $products = Product::paginate(2);
       return view('dashboard.home', compact('products'));
   }
   public function cart()
   {
       return view('cart');
   }
}
