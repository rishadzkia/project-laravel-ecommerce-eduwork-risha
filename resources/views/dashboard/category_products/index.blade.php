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
                <button class="btn btn-primary btn-sm px-3 shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Kategori
                </button>
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
                           <!-- Baris 1 -->
<tr class="align-middle">
    <td class="text-center fw-bold text-secondary">#001</td>
    <td class="fw-semibold" style="color: #0f172a;">Pakaian Pria</td>
    <td class="text-center">
        <span class="badge rounded-pill px-3 py-2 shadow-sm" style="background-color: #0f172a; color: #ffffff;">
            124
        </span>
    </td>
    <td class="text-center">
        <div class="d-inline-flex gap-1">
            <button class="btn btn-sm btn-outline-primary px-2.5 py-1" title="Edit">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger px-2.5 py-1" title="Hapus">
                <i class="bi bi-trash me-1"></i> Hapus
            </button>
        </div>
    </td>
</tr>

<!-- Baris 2 -->
<tr class="align-middle">
    <td class="text-center fw-bold text-secondary">#002</td>
    <td class="fw-semibold" style="color: #0f172a;">Elektronik</td>
    <td class="text-center">
        <span class="badge rounded-pill px-3 py-2 shadow-sm" style="background-color: #0f172a; color: #ffffff;">
            85
        </span>
    </td>
    <td class="text-center">
        <div class="d-inline-flex gap-1">
            <button class="btn btn-sm btn-outline-primary px-2.5 py-1" title="Edit">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger px-2.5 py-1" title="Hapus">
                <i class="bi bi-trash me-1"></i> Hapus
            </button>
        </div>
    </td>
</tr>

<!-- Baris 3 -->
<tr class="align-middle">
    <td class="text-center fw-bold text-secondary">#003</td>
    <td class="fw-semibold" style="color: #0f172a;">Peralatan Rumah Tangga</td>
    <td class="text-center">
        <span class="badge rounded-pill px-3 py-2 shadow-sm" style="background-color: #0f172a; color: #ffffff;">
            210
        </span>
    </td>
    <td class="text-center">
        <div class="d-inline-flex gap-1">
            <button class="btn btn-sm btn-outline-primary px-2.5 py-1" title="Edit">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </button>
            <button class="btn btn-sm btn-outline-danger px-2.5 py-1" title="Hapus">
                <i class="bi bi-trash me-1"></i> Hapus
            </button>
        </div>
    </td>
</tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Footer Card (Opsional: Untuk Pagination) -->
            <div class="card-footer bg-white py-3">
                <p class="text-muted text-center mb-0" style="font-size: 0.875rem;">Menampilkan 3 dari 3 kategori</p>
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