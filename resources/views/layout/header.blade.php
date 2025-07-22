{{--
===============================================================================
📌 Header Component — Site Navigation Bar
===============================================================================

Purpose:
- Displays the logo, site navigation links, and resume download
- Mobile-friendly with a hamburger toggle for responsive navigation

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Tailwind CSS (for styling/responsive layout)
- JavaScript (for mobile menu toggle)

Usage:
- Included at the top of every page via @include('layout.header')
- Sticky/fixed at the top for consistent UX

===============================================================================
--}}



<header class="w-full px-6 py-4 flex justify-between items-center bg-white dark:bg-[#1a1a1a] shadow-sm fixed top-0 z-50 text-black dark:text-white">

    <!-- 🔰 Logo -->
    <a href="#home"
       class="flex items-center space-x-2 group transition duration-300 ease-in-out hover:scale-105">

        <!-- 👑 Crown Icon -->
        <img src="/assets/icons/crown.png" alt="Danilo.Dev Logo"
             class="w-10 h-10 transition-transform duration-200 group-hover:scale-110 dark:invert" />


        <!-- 💻 Name Text (no blue hover now) -->
        <span class="text-xl font-mono font-semibold tracking-tight transition-colors duration-200">
       Danilo.Dev
   </span>
    </a>




    <!-- 🔗 Navigation (Desktop) -->
    <div class="hidden md:flex items-center space-x-6">
        <a href="#home" class="nav-hover">Home</a>
        <a href="#about" class="nav-hover">About</a>
        <a href="#projects" class="nav-hover">Projects</a>
        <a href="#contact" class="nav-hover">Contact</a>



        <a
            href="{{ asset('assets/Danilo-Giacinti-Resume.pdf') }}"
            target="_blank"
            class="text-sm border px-4 py-2 rounded hover:border-blue-600 hover:text-blue-600 transition"
        >
            Resume
        </a>
    </div>

    <!-- 📱 Hamburger Icon (Mobile) -->
    <div class="md:hidden">
        <button
            id="menu-toggle"
            aria-expanded="false"
            aria-controls="mobile-menu"
            class="text-2xl text-black"
            aria-label="Toggle navigation"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- 📱 Mobile Nav -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white dark:bg-[#1a1a1a] shadow-md px-6 py-4 space-y-4 z-40 md:hidden">
        <a href="#home" class="mobile-nav-item">Home</a>
        <a href="#about" class="mobile-nav-item">About</a>
        <a href="#projects" class="mobile-nav-item">Projects</a>
        <a href="#contact" class="mobile-nav-item">Contact</a>

        <a href="{{ asset('assets/Danilo-Giacinti-Resume.pdf') }}"
           target="_blank"
           class="mobile-nav-item border text-center">
            Resume
        </a>
    </div>

</header>
