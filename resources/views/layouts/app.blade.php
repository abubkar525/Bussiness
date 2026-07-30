<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Aetherfield — Sustainability insights, built for business')</title>
    <meta name="description" content="Showcase your software offering with clear product insights, company values, and thought leadership.">

    <!-- Tailwind CDN (swap for a compiled build via Vite in production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased text-[var(--color-text)] bg-[var(--color-bg)]">

    {{-- ============ HEADER ============ --}}
    <header class="site-header">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="font-bold text-xl tracking-tight" style="color:var(--color-primary)">Aetherfield</span>
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">Product</a>
                <a href="{{ route('journal') }}" class="nav-link {{ request()->routeIs('journal') ? 'nav-link-active' : '' }}">Journal</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">About</a>
                <a href="{{ route('careers') }}" class="nav-link {{ request()->routeIs('careers') ? 'nav-link-active' : '' }}">Careers</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="{{ route('get-started') }}" class="btn btn-primary hidden sm:inline-flex">Get started</a>
                <button id="mobileMenuBtn" class="md:hidden" aria-label="Open mobile menu">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div id="mobileMenu" class="hidden md:hidden border-t border-gray-100 bg-white">
            <nav class="flex flex-col px-6 py-4 gap-4 text-sm font-medium">
                <a href="{{ route('home') }}" class="nav-link">Product</a>
                <a href="{{ route('journal') }}" class="nav-link">Journal</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('careers') }}" class="nav-link">Careers</a>
                <a href="{{ route('get-started') }}" class="btn btn-primary w-full justify-center">Get started</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- ============ FOOTER ============ --}}
    <footer class="site-footer">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16">
            <div class="rounded-3xl px-8 py-14 text-center mb-16" style="background:var(--color-primary)">
                <h3 class="text-white text-2xl md:text-3xl font-semibold mb-6">Ready to operationalize your sustainability goals?</h3>
                <a href="{{ route('get-started') }}#demo" class="btn btn-light">Request a demo</a>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-gray-500">
                <div class="flex gap-6 flex-wrap justify-center">
                    <a href="{{ route('home') }}" class="hover:text-gray-800">Product</a>
                    <a href="{{ route('journal') }}" class="hover:text-gray-800">Journal</a>
                    <a href="{{ route('about') }}" class="hover:text-gray-800">About</a>
                    <a href="{{ route('careers') }}" class="hover:text-gray-800">Careers</a>
                </div>
                <a href="{{ route('get-started') }}" class="btn btn-primary btn-sm">Get started</a>
            </div>
            <p class="text-center text-xs text-gray-400 mt-8">© {{ date('Y') }} · All rights reserved</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
