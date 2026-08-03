
    @extends('layout')
    @section('title', 'E-Commerce Website')
    @section('content')
    <!-- Hero Section / Banner -->
    <header class="bg-light py-5 mb-5 border-bottom">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-dark">
                <h1 class="display-4 fw-bolder">Belanja Hemat & Mudah</h1>
                <p class="lead fw-normal text-muted mb-0">Temukan berbagai produk berkualitas dengan harga terbaik hanya di TokoKu.</p>
                <a href="#produk" class="btn btn-primary mt-3 btn-lg">Mulai Belanja</a>
            </div>
        </div>
    </header>

    <!-- Section Produk -->
    <section class="py-5" id="produk">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="mb-4 text-center">Produk Unggulan Kami</h2>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                <!-- Produk 1 -->
                <div class="col mb-5">
                    <div class="card h-100 product-card">
                        <!-- Gambar Produk -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Produk 1" />
                        <!-- Detail Produk -->
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">Sepatu Sneakers Pria</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            Rp 250.000
                        </div>
                        <!-- Tombol Aksi -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke Keranjang</a></div>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 (Diskon) -->
                <div class="col mb-5">
                    <div class="card h-100 product-card">
                        <!-- Badge Diskon -->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Produk 2" />
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">Tas Ransel Anti Air</h5>
                            <span class="text-muted text-decoration-line-through">Rp 300.000</span>
                            Rp 199.000
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke Keranjang</a></div>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col mb-5">
                    <div class="card h-100 product-card">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Produk 3" />
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">Smartwatch Terbaru</h5>
                            Rp 550.000
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke Keranjang</a></div>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="col mb-5">
                    <div class="card h-100 product-card">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Produk 4" />
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">Headphone Wireless</h5>
                            Rp 420.000
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke Keranjang</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection

  