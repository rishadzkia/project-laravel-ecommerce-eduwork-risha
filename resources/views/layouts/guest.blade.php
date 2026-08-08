<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-800 antialiased selection:bg-blue-900 selection:text-white">
        
        <!-- Background Putih Abu (Slate) agar kontras dengan Card Putih -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-50">
            
            <!-- Bagian Logo -->
            <div class="mb-6">
                <a href="/" class="flex flex-col items-center gap-3 transition-transform duration-300 hover:scale-105" style="text-decoration: none;">
                    
                    <!-- Ikon Toko (Tas Belanja) - Elegan dengan warna Navy -->
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-950 to-blue-800 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-900/20">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    
                    <!-- Teks Logo Warna Navy Solid -->
                    <h1 class="text-4xl font-extrabold tracking-tight text-blue-950">
                        TokoKu
                    </h1>
                </a>
            </div>

            <!-- Kontainer Utama (Card) - Putih Bersih dengan Bayangan Lembut -->
            <div class="w-full sm:max-w-md mt-2 px-8 py-10 bg-white shadow-2xl shadow-blue-900/10 border border-slate-100 sm:rounded-3xl transition-all duration-300">
                {{ $slot }}
            </div>

            <!-- Footer Teks Kecil -->
            <div class="mt-8 text-sm text-slate-400 font-medium tracking-wide">
                &copy; {{ date('Y') }} TokoKu. All rights reserved.
            </div>
            
        </div>
    </body>
</html>