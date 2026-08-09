@section('title', 'Register')
<x-guest-layout>
    
    <!-- Header Sambutan Kompak -->
    <div class="mb-4 text-center">
        <h2 class="text-xl font-bold text-blue-950">Buat Akun Baru</h2>
        <p class="text-xs text-slate-500 mt-0.5">Daftar untuk mulai berbelanja di TokoKu.</p>
    </div>

    <!-- Form Container Kompak (space-y-3) -->
    <form method="POST" action="{{ route('register') }}" class="space-y-3">
        @csrf

        <!-- Name --> 
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="text-xs" />
            <x-text-input id="name" class="block mt-1 w-full text-sm py-1.5" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required autofocus autocomplete="name" 
                          placeholder="Mis: Budi Santoso" />
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs" />
            <x-text-input id="email" class="block mt-1 w-full text-sm py-1.5" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autocomplete="username" 
                          placeholder="email@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Grid 2 Kolom untuk Password & Konfirmasi (Menghemat Tinggi Tampilan) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Kata Sandi')" class="text-xs" />
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
                              placeholder="Ulangi kata sandi" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
            </div>
        </div>

        <!-- Action Buttons & Links -->
        <div class="pt-2">
            <!-- Tombol Register -->
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900">
                {{ __('Daftar Sekarang') }}
            </x-primary-button>
            
            <!-- Link Sudah Punya Akun -->
            <div class="mt-3 text-center text-xs">
                <span class="text-slate-500">Sudah punya akun?</span>
                <a class="font-semibold text-blue-800 hover:text-blue-950 transition-colors duration-200 focus:outline-none focus:underline ml-1" href="{{ route('login') }}">
                    {{ __('Masuk di sini') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>