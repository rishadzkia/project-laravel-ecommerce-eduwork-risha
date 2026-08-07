
    @extends('layout')
    @section('title', 'E-Commerce Website')
    @section('content')

      <style>
                        .thumbnail_product {
                            width: 100%;
                            height: 300px;
                            
                            background-size: cover;
                            background-position: center;
                        }
                    </style>
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
            <div class="row gx-4 gy-5 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $product)
                  
               
                <!-- Produk 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 product-card">
                        <!-- Gambar Produk -->
                        <div class="thumbnail_product" style="background-image: url('{{ $product->image }}');"></div>
                        
                        <!-- Detail Produk -->
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                           {{ $product->price }}
                        </div>
                        <!-- Tombol Aksi -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Tambah ke Keranjang</a></div>
                        </div>
                    </div>
                </div>
                 @endforeach
                 
                

                

            </div>
            <div class="row mt-4">
                <div class="col-12">{{ $products->links() }}</div>
            </div>
        </div>
    </section>
    @endsection

  