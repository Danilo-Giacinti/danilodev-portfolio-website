{{--
=======================================================================
📦 Projects Section — Portfolio Work Showcase
=======================================================================
Purpose:
- Display projects you've worked on using dynamic Blade components.
- Each project is pulled via an `@include()` to keep code modular.

Author: Danilo Giacinti
Version: 1.0.0
Dependencies: Blade partials (e.g., `partials/project-card.blade.php`)
========================================================================
--}}

<section id="projects" class="w-full py-24 px-6 flex flex-col items-center justify-center bg-gray-100 dark:bg-[#1a1a1a] transition-colors duration-300">
    <div class="max-w-7xl w-full">

        <!-- 🧾 Section Heading -->
        <div class="js-section-label flex items-center mb-10 ml-2 max-w-xl">
            <h2 class="js-section-heading text-3xl font-bold tracking-tight text-[#1b1b18] dark:text-white mr-4 whitespace-nowrap opacity-0 -translate-x-10 transition-all duration-700">
                Things I've Built
            </h2>
            <div class="js-section-line flex-1 h-px bg-black/10 dark:bg-white/20 opacity-0 translate-x-10 transition-all duration-700 delay-200"></div>
        </div>

        <!-- 🛠️ Project Cards Grid -->
        @include('partials.project-card') {{-- ✅ Modular project card partial --}}

        {{-- ➕ Add more projects below by uncommenting or duplicating --}}
        {{-- @include('partials.project-card-2') --}}
    </div>
</section>
