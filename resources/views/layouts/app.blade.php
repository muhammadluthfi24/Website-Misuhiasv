<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Misuhiasu') }} - @yield('title', 'Gaya Simpel, Kualitas Premium')</title>
    <link rel="icon" href="/images/logo_c.png" type="image/png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <header class="bg-slate-900 shadow-lg" x-data="{ mobileMenuOpen: false }">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-2"> <img src="{{ asset('images/logo_c.png') }}"
                        alt="Misuhiasu Logo" class="h-10 w-10"> <a href="{{ route('home') }}"
                        class="text-white text-2xl font-semibold">Misuhiasu</a> </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-white hover:text-blue-200 transition duration-300">Home</a>
                          <a href="{{ route('tentang') }}"
                        class="text-white hover:text-blue-200 transition duration-300">Tentang</a>   
                    <a href="{{ route('products.index') }}"
                        class="text-white hover:text-blue-200 transition duration-300">Product</a>
                    <a href="{{ route('catalogue') }}"
                        class="text-white hover:text-blue-200 transition duration-300">Catalogue</a>
                    <a href="{{ route('track.order') }}"
                        class="text-white hover:text-blue-200 transition duration-300">Track
                        Order</a>
                    
                </div>

                <!-- Mobile Menu -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white hover:text-blue-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-show="mobileMenuOpen" x-transition @click.away="mobileMenuOpen = false" class="md:hidden mt-2">
                <a href="{{ route('home') }}" class="block text-white py-2 hover:text-blue-200">Home</a>
                <a href="{{ route('products.index') }}" class="block text-white py-2 hover:text-blue-200">Product</a>
                <a href="{{ route('catalogue') }}" class="block text-white py-2 hover:text-blue-200">Catalogue</a>
                <a href="{{ route('track.order') }}" class="block text-white py-2 hover:text-blue-200">Track Order</a>
                <a href="{{ route('tentang') }}" class="block text-white py-2 hover:text-blue-200">Tentang</a>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white mt-16">
        <div class="max-w-7xl mx-auto py-12 px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Misuhiasu</h3>
                    <p class="text-blue-200">Gaya Simpel, Kualitas Premium. Temukan koleksi kaos terbaik dengan desain
                        menarik dan bahan berkualitas tinggi.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-blue-200 hover:text-white">Home</a></li>
                           <li><a href="{{ route('tentang') }}" class="text-blue-200 hover:text-white">Tentang</a>
                        </li>
                        <li><a href="{{ route('products.index') }}" class="text-blue-200 hover:text-white">Product</a>
                        </li>
                        <li><a href="{{ route('catalogue') }}" class="text-blue-200 hover:text-white">Catalogue</a></li>
                        <li><a href="{{ route('track.order') }}" class="text-blue-200 hover:text-white">Track Order</a>
                        </li>
                     
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <p class="text-blue-200">WhatsApp: +62 822-2127-4040</p>
                    <p class="text-blue-200">Email: info@misuhiasu.com</p>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-8 pt-8 text-center">
                <p class="text-blue-200">&copy; {{ date('Y') }} Misuhiasu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</body>

</html>
