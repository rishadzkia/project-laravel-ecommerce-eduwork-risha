@section('title', 'Login')
<x-guest-layout>
    
    <!-- Session Status (Notifikasi Jika Ada) -->
    <x-auth-session-status class="mb-3" :status="session('status')" />

    <!-- Header Sambutan E-Commerce (Kompak) -->
    <div class="mb-5 text-center">
        <h2 class="text-xl font-bold text-blue-950">Selamat Datang!</h2>
        <p class="text-xs text-slate-500 mt-1">Masuk untuk melanjutkan belanja di TokoKu.</p>
    </div>

    <!-- Form Container (space-y-4 agar padat namun rapi) -->
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs" />
            <x-text-input id="email" class="block mt-1 w-full text-sm py-1.5" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autofocus autocomplete="username" 
                          placeholder="email@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Kata Sandi')" class="text-xs" />
            <x-text-input id="password" class="block mt-1 w-full text-sm py-1.5"
                          type="password"
                          name="password"
                          required autocomplete="current-password" 
                          placeholder="Masukkan kata sandi Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
        </div>

        <!-- Remember Me & Forgot Password (Dibuat SATU BARIS sejajar) -->
        <div class="flex items-center justify-between pt-1">
            <!-- Remember Me -->
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-blue-900 shadow-sm focus:ring-blue-900" name="remember">
                <span class="ms-2 text-xs text-slate-600">{{ __('Ingat saya') }}</span>
            </label>

            <!-- Lupa Sandi -->
            @if (Route::has('password.request'))
                <a class="text-xs font-semibold text-blue-800 hover:text-blue-950 transition-colors duration-200 focus:outline-none focus:underline" href="{{ route('password.request') }}">
                    {{ __('Lupa sandi?') }}
                </a>
            @endif
        </div>

        <!-- Action Buttons -->
        <div class="pt-2">
            <!-- Tombol Login Full Width -->
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900">
                {{ __('Masuk') }}
            </x-primary-button>
            
            <!-- Link Daftar Akun Baru -->
            <div class="mt-4 text-center text-xs">
                <span class="text-slate-500">Belum punya akun?</span>
                <a class="font-semibold text-blue-800 hover:text-blue-950 transition-colors duration-200 focus:outline-none focus:underline ml-1" href="{{ route('register') }}">
                    {{ __('Daftar sekarang') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>