<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <!-- Card Container -->
        <div class="card shadow-sm border-0">
            
            <!-- Header Card & Tombol Tambah -->
            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold text-dark"></h5>
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm px-3 shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Produk
                </a>
            </div> 

            <!-- Body Card & Tabel -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-center" width="10%">ID</th>
                                <th scope="col" width="40%">Nama</th>
                                <th scope="col" class="text-center" width="25%">Deskripsi</th>
                                <th scope="col" class="text-center" width="25%">Stok</th>
                                <th scope="col" class="text-center" width="25%">Harga</th>
                                <th scope="col" class="text-center" width="25%">Gambar</th>
                                <th scope="col" class="text-center" width="25%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    @foreach ($products as $product)
        <tr class="align-middle">

            <!-- ID -->
            <td class="text-center fw-bold" style="color: #1e293b;">
                #{{ $product->id }}
            </td>

            <!-- Nama Produk -->
            <td class="fw-semibold" style="color: #0f172a;">
                {{ $product->name }}
            </td>

            <!-- Deskripsi -->
            <td class="text-muted small">
                {{ $product->description }}
            </td>

            <!-- Stok -->
            <td class="text-center">
                <span class="badge rounded-pill px-3 py-2 shadow-sm"
                    style="background-color: #0f172a; color: #ffffff;">
                    {{ $product->stock }}
                </span>
            </td>

            <!-- Harga -->
            <td class="text-center fw-bold" style="color: #1e3a8a;">
                Rp {{ $product->price }}
            </td>

            <!-- Gambar -->
            <td class="text-center">
    <img src="{{ Str::startsWith($product->image, 'http') 
        ? $product->image 
        : asset('storage/' . $product->image) }}"
        alt="{{ $product->name }}"
        class="rounded-3 border shadow-sm"
        style="width: 48px; height: 48px; object-fit: cover;">
</td>

            <!-- Aksi -->
            <td class="text-center">
                <div class="d-inline-flex gap-1">

                    <a href="{{ route('products.edit', $product->id) }}"
                        class="btn btn-sm btn-outline-primary px-2.5 py-1"
                        title="Edit">
                        <i class="bi bi-pencil-square me-1"></i> Edit
                    </a>

                  <form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit"
        class="btn btn-sm btn-outline-danger px-2.5 py-1"
        title="Hapus">
        <i class="bi bi-trash me-1"></i> Hapus
    </button>
</form>

                </div>
            </td>

        </tr>
    @endforeach
</tbody>
                    </table>
                </div>
            </div>
            
            <!-- Footer Card (Opsional: Untuk Pagination) -->
<div class="card-footer bg-white py-3">
    <p class="text-muted text-center mb-0" style="font-size: 0.875rem;">
        Menampilkan {{ $products->count() }} dari {{ $products->count() }} produk
    </p>
</div>
            
        </div>
    </div>
</x-app-layout>

{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kategori Produk</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    

    <!-- Bootstrap 5 JS Bundle (Termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}