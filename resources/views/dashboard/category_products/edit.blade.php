<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori Produk') }}
        </h2>
    </x-slot>
    <div class="card shadow-sm border-0 rounded-3">
                    
                    <!-- Header Card -->
                    <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #0f172a;">Edit Kategori</h5>
                        {{-- <!-- Tombol Kembali -->
                        <a href="#" class="btn btn-sm btn-outline-secondary px-3">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a> --}}
                    </div>

                    <!-- Body Form -->
                    <div class="card-body p-4">
                        <form action="{{ route('category-products.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
                            
                            <!-- Input Nama Kategori -->
                            <div class="mb-4">
                                <label for="nama_kategori" class="form-label fw-semibold" style="color: #0f172a;">Nama Kategori</label>
                                <input
    type="text"
    class="form-control form-control-lg fs-6"
    id="nama_kategori"
    name="name"
    value="{{ $category->name }}"
    placeholder="Contoh: Pakaian Pria"
    required
    autofocus
>
                                <div class="form-text text-muted mt-2" style="font-size: 0.85rem;">
                                    Masukkan nama kategori yang singkat dan jelas.
                                </div>
                            </div>

                            <!-- Area Tombol Aksi -->
                            <div class="d-flex justify-content-end gap-2 pt-2 border-top mt-4 pt-4">
                                <button type="reset" class="btn btn-light border px-4 shadow-sm">
                                    Batal
                                </button>
                                <button type="submit" class="btn px-4 shadow-sm" style="background-color: #0f172a; color: white;">
                                    <i class="bi bi-save me-1"></i> Update Kategori
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
</x-app-layout>