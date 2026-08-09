@section('title', 'Verifikasi Email')
<x-guest-layout>
    
    <!-- Header Notifikasi -->
    <div class="mb-5 text-center"> 
        <!-- Ikon Email / Pesan -->
        <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-50 rounded-full mb-3 shadow-sm border border-blue-100">
            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        </div>
        
        <h2 class="text-xl font-bold text-blue-950">Verifikasi Email Anda</h2>
        
        <p class="text-xs text-slate-500 mt-1.5 px-2 leading-relaxed">
            {{ __('Terima kasih telah mendaftar! Sebelum mulai berbelanja, mohon verifikasi alamat email Anda melalui tautan yang baru saja kami kirim. Jika Anda tidak menerimanya, kami akan mengirimkan yang baru.') }}
        </p>
    </div>

    <!-- Session Status (Notifikasi jika email berhasil dikirim ulang) -->
    @if (session('status') == 'verification-link-sent')
        <div class="mb-5 text-xs font-medium text-green-700 bg-green-50 p-2.5 rounded text-center border border-green-200">
            {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda daftarkan.') }}
        </div>
    @endif

    <!-- Action Buttons (Ditata secara vertikal agar rapi di layar kecil) -->
    <div class="space-y-3">
        <!-- Tombol Kirim Ulang -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button class="w-full justify-center text-sm py-2 bg-blue-950 hover:bg-blue-900 focus:ring-blue-900 shadow-md">
                {{ __('Kirim Ulang Tautan Verifikasi') }}
            </x-primary-button>
        </form>

        <!-- Tombol Log Out -->
        <form method="POST" action="{{ route('logout') }}" class="text-center">
            @csrf
            <button type="submit" class="text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors duration-200 focus:outline-none focus:underline">
                {{ __('Keluar dari Akun') }}
            </button>
        </form>
    </div>
</x-guest-layout>