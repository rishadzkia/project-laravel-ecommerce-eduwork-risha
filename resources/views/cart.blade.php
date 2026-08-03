 @extends('layout')
    @section('title', 'Shopping Cart')
    @section('content')
    <!-- Halaman Keranjang -->
    <section class="py-5 bg-light min-vh-100">
        <div class="container">
            <h2 class="mb-4">Keranjang Belanja</h2>
            
            <div class="row">
                <!-- Bagian Daftar Produk (Kiri) -->
                <div class="col-lg-8 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="ps-4">Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Kuantitas</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col" class="pe-4 text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item 1 -->
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" class="cart-img me-3" alt="Produk 1">
                                                    <div>
                                                        <h6 class="mb-0">Sepatu Sneakers Pria</h6>
                                                        <small class="text-muted">Ukuran: 42 | Warna: Hitam</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp 250.000</td>
                                            <td>
                                                <div class="input-group input-group-sm w-auto d-inline-flex">
                                                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-dash"></i></button>
                                                    <input type="number" class="form-control qty-input" value="1" min="1">
                                                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-plus"></i></button>
                                                </div>
                                            </td>
                                            <td class="fw-bold">Rp 250.000</td>
                                            <td class="pe-4 text-center">
                                                <button class="btn btn-sm btn-outline-danger" title="Hapus Item">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Item 2 -->
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" class="cart-img me-3" alt="Produk 2">
                                                    <div>
                                                        <h6 class="mb-0">Tas Ransel Anti Air</h6>
                                                        <small class="text-muted">Warna: Navy</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp 199.000</td>
                                            <td>
                                                <div class="input-group input-group-sm w-auto d-inline-flex">
                                                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-dash"></i></button>
                                                    <input type="number" class="form-control qty-input" value="2" min="1">
                                                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-plus"></i></button>
                                                </div>
                                            </td>
                                            <td class="fw-bold">Rp 398.000</td>
                                            <td class="pe-4 text-center">
                                                <button class="btn btn-sm btn-outline-danger" title="Hapus Item">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-white py-3 ps-4">
                            <a href="index.html" class="btn btn-outline-primary">
                                <i class="bi bi-arrow-left me-2"></i>Lanjut Belanja
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bagian Ringkasan Pesanan (Kanan) -->
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0 fw-bold">Ringkasan Pesanan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0 pb-0">
                                    Subtotal (3 Barang)
                                    <span>Rp 648.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-0 pb-0">
                                    Ongkos Kirim
                                    <span>Rp 20.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0 mb-3 border-bottom">
                                    Diskon / Promo
                                    <span class="text-danger">- Rp 10.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold fs-5 border-0">
                                    Total Belanja
                                    <span class="text-primary">Rp 658.000</span>
                                </li>
                            </ul>
                            
                            <!-- Input Kode Promo -->
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Kode Promo">
                                <button class="btn btn-outline-secondary" type="button">Terapkan</button>
                            </div>

                            <button class="btn btn-success w-100 py-2 fs-5">
                                Lanjut ke Pembayaran <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection