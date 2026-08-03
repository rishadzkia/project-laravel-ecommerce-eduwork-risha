<!DOCTYPE html>
<html lang="id">
<head>
   
    <title>@yield('title')</title>
    <!-- Memuat Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Memuat Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>

   @include('navbar')

    
<div style="min-height: 80vh;">
 
    @yield('content')
    </div>

   <x-footer></x-footer>

    <!-- Memuat Bootstrap JS beserta Popper dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.css"></script>
</body>
</html>