<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot> 

    <!-- Card Form -->
                <div class="card shadow-sm border-0 rounded-3">
                    
                    <!-- Header Card -->
                    <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #0f172a;">Tambah Produk Baru</h5>
                        {{-- <!-- Tombol Kembali -->
                        <a href="#" class="btn btn-sm btn-outline-secondary px-3">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a> --}}
                    </div>

                    <!-- Body Form -->
                    <div class="card-body p-4 p-md-5">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            
                            <!-- Nama Produk -->
                            <div class="mb-4">
                                <label for="nama_produk" class="form-label fw-semibold" style="color: #0f172a;">Nama Produk</label>
                                <input type="text" class="form-control form-control-lg fs-6" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk..." required autofocus>
                            </div>

                            <!-- Grid 2 Kolom untuk Kategori & Gambar -->
                            <div class="row mb-4">
                                <!-- Kategori -->
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="kategori_id" class="form-label fw-semibold" style="color: #0f172a;">Kategori Produk</label>
                                    <select class="form-select form-select-lg fs-6" id="kategori_id" name="kategori_id" required>
                                        <option value="" selected disabled>-- Pilih Kategori --</option>
                                        <option value="1">Pakaian Pria</option>
                                        <option value="2">Elektronik</option>
                                        <option value="3">Peralatan Rumah Tangga</option>
                                    </select>
                                </div>
                                <!-- Gambar -->
                                <div class="col-md-6">
                                    <label for="gambar" class="form-label fw-semibold" style="color: #0f172a;">Foto Produk</label>
                                    <input class="form-control form-control-lg fs-6" type="file" id="gambar" name="gambar" accept="image/*" required>
                                </div>
                            </div>

                            <!-- Grid 2 Kolom untuk Harga & Stok -->
                            <div class="row mb-4">
                                <!-- Harga -->
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="harga" class="form-label fw-semibold" style="color: #0f172a;">Harga (Rp)</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light fs-6">Rp</span>
                                        <input type="number" class="form-control fs-6" id="harga" name="harga" placeholder="0" min="0" required>
                                    </div>
                                </div>
                                <!-- Stok -->
                                <div class="col-md-6">
                                    <label for="stok" class="form-label fw-semibold" style="color: #0f172a;">Jumlah Stok</label>
                                    <input type="number" class="form-control form-control-lg fs-6" id="stok" name="stok" placeholder="0" min="0" required>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label fw-semibold" style="color: #0f172a;">Deskripsi Produk</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Tuliskan spesifikasi, keunggulan, atau detail lainnya tentang produk ini..." required></textarea>
                            </div>

                            <!-- Area Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2 pt-3 border-top mt-5">
                                <button type="reset" class="btn btn-light border px-4 shadow-sm">
                                    Batal
                                </button>
                                <button type="submit" class="btn px-4 shadow-sm" style="background-color: #0f172a; color: white;">
                                    <i class="bi bi-save me-1"></i> Simpan Produk
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
</x-app-layout>