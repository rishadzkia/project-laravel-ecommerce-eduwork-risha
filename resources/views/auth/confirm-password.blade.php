@section('title', 'Konfirmasi Sandi')
<x-guest-layout>
    
    <!-- Header Keamanan -->
    <div class="mb-5 text-center">
        <!-- Ikon Gembok (Memberikan rasa aman pada e-commerce) -->
        <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-50 rounded-full mb-3 shadow-sm border border-blue-100">
            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
        </div>
        
        <h2 class="text-xl font-bold text-blue-950">Verifikasi Keamanan</h2>
        <p class="text-xs text-slate-500 mt-1.5 px-2">
            {{ __('Ini adalah area aman TokoKu. Silakan konfirmasi kata sandi Anda sebelum melanjutkan aksi ini.') }}
        </p>
    </div>

    <!-- Form Container -->
    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
        @csrf

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

        <!-- Action Button -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900 shadow-md">
                {{ __('Konfirmasi Sandi') }}
            </x-primary-button>
        </div>
        
        <!-- Opsi Batal (Opsional, untuk UX E-commerce yang baik) -->
        <div class="mt-4 text-center">
            <a href="{{ url()->previous() }}" class="text-xs font-semibold text-slate-500 hover:text-blue-900 transition-colors">
                Batal & Kembali
            </a>
        </div>
    </form>
</x-guest-layout>