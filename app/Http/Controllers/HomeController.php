<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(2);

        $totalProducts = Product::count();
        $totalCategories = ProductCategory::count();

        return view('dashboard', compact(
            'products',
            'totalProducts',
            'totalCategories'
        ));
    }

    public function cart()
    {
        return view('cart');
    }
}