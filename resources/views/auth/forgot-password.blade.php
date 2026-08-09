@section('title', 'Lupa Kata Sandi')
<x-guest-layout>
    
    <!-- Header Bantuan -->
    <div class="mb-5 text-center">
        <!-- Ikon Amplop / Pesan -->
        <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-50 rounded-full mb-3 shadow-sm border border-blue-100">
            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        </div>
        
        <h2 class="text-xl font-bold text-blue-950">Lupa Kata Sandi?</h2>
        
        <!-- Teks bawaan Laravel yang diubah ukurannya agar lebih ringkas dan rapi -->
        <p class="text-xs text-slate-500 mt-1.5 px-1 leading-relaxed">
            {{ __('Jangan khawatir! Masukkan email akun Anda, dan kami akan mengirimkan tautan untuk membuat kata sandi baru.') }}
        </p>
    </div>

    <!-- Session Status (Notifikasi saat email berhasil dikirim) -->
    <x-auth-session-status class="mb-4 text-xs font-medium text-green-600 bg-green-50 p-2 rounded" :status="session('status')" />

    <!-- Form Container -->
    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs" />
            <x-text-input id="email" class="block mt-1 w-full text-sm py-1.5" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autofocus 
                          placeholder="email@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Action Button -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900 shadow-md">
                {{ __('Kirim Tautan Reset Sandi') }}
            </x-primary-button>
        </div>

        <!-- Link Kembali ke Login -->
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-xs font-semibold text-slate-500 hover:text-blue-900 transition-colors duration-200">
                &larr; Kembali ke halaman Masuk
            </a>
        </div>
    </form>
</x-guest-layout>