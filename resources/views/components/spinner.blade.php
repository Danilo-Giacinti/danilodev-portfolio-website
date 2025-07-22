{{--
===============================================================================
🔄 Fullscreen Page Loader Component
===============================================================================
Purpose:
- Shows a centered logo animation on page load
- Includes animated circle, fading "D" letter, and a crown image

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Tailwind CSS (for layout, transitions)
- Custom CSS class: `animate-draw` (handles circle drawing)
- JS: `setupPageLoader.js` (for JS-based entry animations)

Notes:
- Used during first page load (or reload)
- Hidden via JavaScript after animations complete

===============================================================================
--}}

<!-- 🔄 Fullscreen Page Loader -->
<div id="page-loader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white dark:bg-[#0f0f0f] transition-opacity duration-700">
    <div class="relative w-40 h-40">

        <!-- 🌀 Animated Circle Outline -->
        <svg class="w-full h-full" viewBox="0 0 100 100">
            <circle
                cx="50"
                cy="50"
                r="40"
                fill="none"
                stroke="black"
                stroke-width="2"
                stroke-dasharray="251.2"
                stroke-dashoffset="251.2"
                class="animate-draw dark:stroke-white"
            />
        </svg>

        <!-- 🔤 Letter D Fade-In -->
        <div
            id="letter-d"
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-6xl font-[500] text-black dark:text-white opacity-0"
            style="font-family: 'Satoshi', sans-serif;"
        >
            D
        </div>

        <!-- 👑 Crown Drop Animation -->
        <img
            id="crown"
            src="{{ asset('assets/icons/crown.png') }}"
            alt="Crown"
            class="absolute -top-16 left-1/2 transform -translate-x-1/2 w-28 h-auto opacity-0 transition-all duration-300 dark:filter dark:invert dark:brightness-[150%]"
        />
    </div>
</div>
