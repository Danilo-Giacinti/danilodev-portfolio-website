{{--
===============================================================================
🌐 Application Master Layout — app.blade.php
===============================================================================

Purpose:
- Main wrapper for every frontend view (header → footer)
- Ensures dark mode works instantly (no flicker)
- Loads all essential head/meta/scripts/assets
- Defines the layout skeleton and injects page content via `@yield('content')`

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Blade includes (layout.meta, layout.header, layout.footer, etc.)
- TailwindCSS + dark mode
- JS-controlled loading animation

Usage:
- All pages extend this using: @extends('layout.app')

===============================================================================
--}}

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- 🌙 Prevents dark mode flicker on first load (must stay here) --}}
    <script>
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    {{-- 🔗 Load meta tags, favicon, fonts, and CSS/JS bundles --}}
    @include('layout.meta')
</head>

<body class="min-h-screen bg-white dark:bg-[#0f0f0f] overflow-x-hidden transition-all duration-300">

{{-- 🔄 Fullscreen Loading Spinner --}}
@include('components.spinner')

{{-- 📦 App Shell (Everything wrapped inside this) --}}
<div id="page-content" class="opacity-0 transition-opacity duration-700">
    <div id="font-root" class="transition-all duration-300 bg-white dark:bg-[#0f0f0f]"
         style="font-family: 'Instrument Sans', sans-serif;">

        {{-- 🔝 Header / Navbar --}}
        @include('layout.header')

        {{-- 📱 Sidebars: Email + Social Icons --}}
        @include('components.social-icons')
        @include('components.email-sidebar')

        {{-- 🧾 Dynamic page content gets injected here --}}
        @yield('content')

        {{-- 🔚 Footer --}}
        @include('layout.footer')

    </div>
</div>

{{-- 📦 External Libraries --}}
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>
</html>
