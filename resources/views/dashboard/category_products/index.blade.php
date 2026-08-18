<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kategori Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <!-- Card Container -->
        <div class="card shadow-sm border-0">
            
            <!-- Header Card & Tombol Tambah -->
            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold text-dark"></h5>
                <a href="{{ route('category-products.create') }}" class="btn btn-primary btn-sm px-3 shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Kategori
                </a>
            </div> 

            <!-- Body Card & Tabel -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-center" width="10%">ID</th>
                                <th scope="col" width="40%">Nama Kategori</th>
                                <th scope="col" class="text-center" width="25%">Jumlah Produk</th>
                                <th scope="col" class="text-center" width="25%">Aksi</th>
                            </tr>
                        </thead>
                       <tbody>
    @foreach ($categories as $category)
        <tr class="align-middle">
            <td class="text-center fw-bold text-secondary">
                #{{ $category->id }}
            </td>

            <td class="fw-semibold" style="color: #0f172a;">
                {{ $category->name }}
            </td>

            <td class="text-center">
                <span class="badge rounded-pill px-3 py-2 shadow-sm"
                      style="background-color: #0f172a; color: #ffffff;">
                    {{ $category->products_count }}
                </span>
            </td>

            <td class="text-center">
                <div class="d-inline-flex gap-1">
                    <a href="{{ route('category-products.edit', $category->id) }}"
                       class="btn btn-sm btn-outline-primary px-2.5 py-1"
                       title="Edit">
                        <i class="bi bi-pencil-square me-1"></i> Edit
                    </a>

                    <form action="{{ route('category-products.destroy', $category->id) }}"
      method="POST"
      class="d-inline">

    @csrf
    @method('DELETE')

    <button type="submit"
            class="btn btn-sm btn-outline-danger px-2.5 py-1"
            title="Hapus"
            onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
    Menampilkan {{ $categories->count() }} dari {{ $categories->count() }} kategori
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