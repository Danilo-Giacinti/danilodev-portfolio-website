{{--
===============================================================================
📄 Main Homepage View — Blade File
===============================================================================

Purpose:
- Controls the structure and component order of the landing page (`/`)
- Injects reusable sections: hero, about, projects, interactive demos, contact

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Extends `layout.app` (global layout wrapper)
- Uses partials in /resources/views/components/

Usage:
- Route to this view from web.php for the homepage
- Blade sections auto-render inside `@yield('content')` in layout.app

===============================================================================
--}}

@extends('layout.app') {{-- 🧱 Base layout with header, footer, meta, etc. --}}

@section('content')

    @include('components.hero')       {{-- 👋 Hero section with intro text/image --}}
    @include('components.about')      {{-- 👨‍💻 About me, skills, and tech stack --}}
    @include('components.projects')   {{-- 📦 Portfolio of built projects --}}
    @include('components.play')       {{-- 🧪 Playground with theme/font toggles --}}
    @include('components.contact')    {{-- 📬 Contact and collaboration section --}}

@endsection
