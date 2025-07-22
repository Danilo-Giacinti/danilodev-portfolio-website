{{--
===============================================================================
🔚 Site Footer — Global Footer Section
===============================================================================

Purpose:
- Displays author credit and tech-themed icon row
- Responsive and styled for dark/light themes

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Tailwind CSS utility classes
- Inline SVG icons

Usage:
- Included at the bottom of all pages via @include('layout.footer')

===============================================================================
--}}

<footer class="w-full px-6 py-8 text-center text-sm mt-4 text-gray-500 dark:text-gray-400 dark:bg-[#0f0f0f]">

    <!-- 📄 Credit Line -->
    <p class="mb-2">Designed & Built by Danilo Giacinti</p>

    <!-- 🧠 Personal Icon Row -->
    <div class="flex justify-center items-center gap-6 text-xs font-mono">

        <!-- 💻 Developer Icon -->
        <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
            </svg>
            <span>Full-Stack Dev</span>
        </div>

        <!-- ☕ Coffee Icon -->
        <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8M8 3h8v4a4 4 0 01-8 0V3z"/>
            </svg>
            <span>Fueled by Coffee</span>
        </div>

        <!-- 🚀 Learning Icon -->
        <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 20l1.41-1.41L12 12l6.59 6.59L20 20l-8-8-8 8z"/>
            </svg>
            <span>Always Learning</span>
        </div>

    </div>
</footer>
