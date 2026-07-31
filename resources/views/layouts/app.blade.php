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
    <footer class="site-footer" style="background:var(--color-primary)">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16">
            <div class="text-center mb-16">
                <h3 class="text-white text-2xl md:text-3xl font-semibold mb-6">Ready to operationalize your sustainability goals?</h3>
                <a href="{{ route('get-started') }}#demo" class="btn btn-light">Request a demo</a>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-sm pb-8 border-b border-white/10">
                <div class="flex gap-6 flex-wrap justify-center">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">Product</a>
                    <a href="{{ route('journal') }}" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">Journal</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">About</a>
                    <a href="{{ route('careers') }}" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">Careers</a>
                </div>
                <a href="{{ route('get-started') }}" class="btn btn-light btn-sm">Get started</a>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-8">
                <p class="text-xs text-gray-400 order-2 md:order-1">© {{ date('Y') }} Aetherfield (Published by Abubakar) · All rights reserved</p>

                {{-- Social icons --}}
                <div class="flex items-center gap-5 order-1 md:order-2">
                    <a href="#" aria-label="LinkedIn" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 8.5H3.56V20.5H6.94V8.5ZM5.25 3.5C4.14 3.5 3.25 4.4 3.25 5.5C3.25 6.6 4.14 7.5 5.25 7.5C6.36 7.5 7.25 6.6 7.25 5.5C7.25 4.4 6.36 3.5 5.25 3.5ZM20.5 20.5V13.9C20.5 10.5 18.9 9 16.6 9C14.77 9 13.86 9.99 13.4 10.75V8.5H10.02C10.06 9.32 10.02 20.5 10.02 20.5H13.4V13.9C13.4 13.55 13.42 13.2 13.53 12.94C13.82 12.24 14.47 11.51 15.57 11.51C17.02 11.51 17.13 12.79 17.13 14.06V20.5H20.5Z"/></svg>
                    </a>
                    <a href="#" aria-label="X / Twitter" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H21.7L15.4 10.2L22.8 21H17L12.5 14.6L7.3 21H4.5L11.2 13.3L4.1 3H10L14 8.9L18.9 3ZM17.9 19.1H19.4L9.1 4.8H7.5L17.9 19.1Z"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="text-gray-300 hover:text-[var(--color-secondary)] transition-colors">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="3.6"/><circle cx="17.2" cy="6.8" r="1"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>