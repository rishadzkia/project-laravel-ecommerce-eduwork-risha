<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan semua data product.
     * URL: GET /products
     */
    public function index()
    {
        return view('dashboard.products.index');
    }

    /**
     * Menampilkan form tambah product.
     * URL: GET /products/create
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Menyimpan data product baru.
     * URL: POST /products
     */
    public function store(Request $request)
    {
        // Contoh mengambil data dari form
        $name = $request->name;
        $price = $request->price;

        return "Data product '$name' dengan harga Rp$price berhasil disimpan.";
    }

    /**
     * Menampilkan detail satu product.
     * URL: GET /products/{id}
     */
    public function show(string $id)
    {
        return "Menampilkan detail product dengan ID: $id";
    }

    /**
     * Menampilkan form edit product.
     * URL: GET /products/{id}/edit
     */
    public function edit(string $id)
    {
        return "Form edit product dengan ID: $id";
        // Nanti biasanya:
        // return view('dashboard.products.edit', compact('product'));
    }

    /**
     * Mengupdate data product.
     * URL: PUT/PATCH /products/{id}
     */
    public function update(Request $request, string $id)
    {
        $name = $request->name;
        $price = $request->price;

        return "Product ID $id berhasil diupdate menjadi $name dengan harga Rp$price.";
    }

    /**
     * Menghapus product.
     * URL: DELETE /products/{id}
     */
    public function destroy(string $id)
    {
        return "Product dengan ID $id berhasil dihapus.";
    }   
}