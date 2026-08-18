<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $categories = ProductCategory::withCount('products')->get();

    return view('dashboard.category_products.index', compact('categories'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category_products.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
    ]);

    ProductCategory::create([
        'name' => $request->name,
    ]);

    return redirect()->route('category-products.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $category = ProductCategory::findOrFail($id);

    return view('dashboard.category_products.edit', compact('category'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required',
    ]);

    $category = ProductCategory::findOrFail($id);

    $category->update([
        'name' => $request->name,
    ]);

    return redirect()->route('category-products.index');
}

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $category = ProductCategory::findOrFail($id);

    $category->delete();

    return redirect()->route('category-products.index');
}
}
