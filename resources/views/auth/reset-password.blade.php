@section('title', 'Reset Kata Sandi')
<x-guest-layout>
    
    <!-- Header Pembaruan Keamanan -->
    <div class="mb-4 text-center">
        <!-- Ikon Refresh/Shield -->
        <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-50 rounded-full mb-3 shadow-sm border border-blue-100">
            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg>
        </div>
        
        <h2 class="text-xl font-bold text-blue-950">Buat Sandi Baru</h2>
        <p class="text-xs text-slate-500 mt-1">Silakan masukkan kata sandi baru untuk mengamankan akun Anda.</p>
    </div>

    <!-- Form Container (Kompak dengan space-y-3) -->
    <form method="POST" action="{{ route('password.store') }}" class="space-y-3">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs" />
            <!-- Biasanya email di halaman reset sudah terisi otomatis dari link, readonly opsional tapi disarankan jika tidak ingin diubah user -->
            <x-text-input id="email" class="block mt-1 w-full text-sm py-1.5 bg-slate-50 text-slate-600 focus:bg-white" 
                          type="email" 
                          name="email" 
                          :value="old('email', $request->email)" 
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Grid 2 Kolom untuk Sandi Baru & Konfirmasi (Menghemat Ruang Vertikal) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Kata Sandi Baru')" class="text-xs" />
                <x-text-input id="password" class="block mt-1 w-full text-sm py-1.5" 
                              type="password" 
                              name="password" 
                              required autocomplete="new-password" 
                              placeholder="Min. 8 karakter" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Sandi')" class="text-xs" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full text-sm py-1.5"
                              type="password"
                              name="password_confirmation" 
                              required autocomplete="new-password" 
                              placeholder="Ulangi sandi baru" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
            </div>
        </div>

        <!-- Action Button -->
        <div class="pt-2">
            <!-- Tombol Full-Width -->
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900 shadow-md">
                {{ __('Simpan Kata Sandi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>