{{--
===============================================================================
🧠 Head Section — Meta, Fonts & Vite Config
===============================================================================

Purpose:
- Sets core `<head>` elements for the application (meta tags, title, fonts)
- Loads default and optional font families
- Injects compiled assets via Laravel Vite (CSS + JS bundles)

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Laravel Vite (build system)
- Tailwind CSS (loaded via app.css)
- External fonts from Bunny & Fontshare
- Font Awesome + Devicon (for UI icons)

Usage:
- Included in layout via: @include('layout.meta')
- Must be placed inside the <head> of your HTML document

===============================================================================
--}}

<!-- 🧠 META + FONT + VITE CONFIG -->
<!-- 🧠 Core Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Danilo.Dev – Full Stack Website & App Developer | Modern Web Solutions</title>

<meta name="description" content="Danilo Giacinti is a full-stack website and application developer offering custom web solutions through ModaTechs.">
<meta name="keywords" content="Full Stack Developer, Laravel, Web Development, Application Developer, Danilo Giacinti, ModaTechs">
<meta name="author" content="Danilo Giacinti">

<!-- 🔗 LinkedIn Profile -->
<meta property="article:author" content="https://www.linkedin.com/in/danilo-giacinti-30a221345/">
<meta name="linkedin:profile" content="https://www.linkedin.com/in/danilo-giacinti-30a221345/">

<!-- 🌐 Portfolio Domain -->
<meta name="website" content="https://danilodev.dev">
<meta property="og:url" content="https://danilodev.dev">



<!-- 👑 Favicon -->
<link rel="icon" type="image/png" href="{{ asset('assets/icons/crown.png') }}">


<!-- ⛓️ Preconnect for better font performance -->
<link rel="preconnect" href="https://fonts.bunny.net">

<!-- 🎨 Instrument Sans (default project font) -->
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- 💼 Satoshi Font (modern, clean) -->
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,500&display=swap" rel="stylesheet">

<!-- ✨ Plus Jakarta Sans (startup feel) -->
<link href="https://api.fontshare.com/v2/css?f[]=plus-jakarta-sans@400,500,700&display=swap" rel="stylesheet" />

<!-- 🧊 Icon Libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

<!-- 🚀 Laravel Vite Assets (CSS + JS) -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif
