<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = Product::all();

    return view('dashboard.products.index', compact('products'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('dashboard.products.tambah');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    $product = new Product();

    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->product_category_id = $request->product_category_id;
    $product->image = $imagePath;

    $product->save();

    return redirect()->route('products.index');
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Product $product)
{
    return view('dashboard.products.edit', compact('product'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Product $product)
{
    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        
        'stock' => $request->stock,
        'product_category_id' => $request->product_category_id,
    ]);

    return redirect()->route('products.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index');
}
}
