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
                <a href="{{ route('products.tambah') }}" class="btn btn-primary btn-sm px-3 shadow-sm">
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
                            <!-- Baris 1 -->
                           <tr class="align-middle">
    <!-- ID -->
    <td class="text-center fw-bold" style="color: #1e293b;">#01</td>

    <!-- Nama Produk -->
    <td class="fw-semibold" style="color: #0f172a;">
        Pakaian Pria
    </td>

    <!-- Deskripsi -->
    <td class="text-muted small">
        Pakaian pria berkualitas tinggi
    </td>

    <!-- Jumlah Produk (Badge Navy) -->
    <td class="text-center">
        <span class="badge rounded-pill px-3 py-2 shadow-sm" style="background-color: #0f172a; color: #ffffff;">
            124
        </span>
    </td>

    <!-- Harga -->
    <td class="text-center fw-bold" style="color: #1e3a8a;">
        Rp 150.000
    </td>

    <!-- Gambar Produk -->
    <td class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkvallQ5ZGN8H0RHyH6fe91ycZ2NbnLPmx9x-2_NqnBQ&s=10" 
             alt="Pakaian Pria" 
             class="rounded-3 border shadow-sm" 
             style="width: 48px; height: 48px; object-fit: cover;">
    </td>

    <!-- Aksi -->
    <td class="text-center">
        <div class="d-inline-flex gap-1">
            <a href="{{ route('products.edit', ['id']) }}" class="btn btn-sm btn-outline-primary px-2.5 py-1" title="Edit">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </a>
            <button class="btn btn-sm btn-outline-danger px-2.5 py-1" title="Hapus">
                <i class="bi bi-trash me-1"></i> Hapus
            </button>
        </div>
    </td>
</tr>

                            {{-- <!-- Baris 2 -->
                            <tr>
                                <td class="text-center fw-semibold">#002</td>
                                <td>Elektronik</td>
                                <td class="text-center">
                                    <span class="badge bg-secondary rounded-pill px-3 py-2">85</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm text-dark px-3 me-1">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm px-3">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr> --}}

                            {{-- <!-- Baris 3 -->
                            <tr>
                                <td class="text-center fw-semibold">#003</td>
                                <td>Peralatan Rumah Tangga</td>
                                <td class="text-center">
                                    <span class="badge bg-secondary rounded-pill px-3 py-2">210</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm text-dark px-3 me-1">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm px-3">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Footer Card (Opsional: Untuk Pagination) -->
            {{-- <div class="card-footer bg-white py-3">
                <p class="text-muted text-center mb-0" style="font-size: 0.875rem;">Menampilkan 3 dari 3 kategori</p>
            </div> --}}
            
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