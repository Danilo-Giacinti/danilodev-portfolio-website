{{--
============================================================================
📦 Project Card Partial — Brooks Gym
============================================================================
Purpose:
- A reusable, animated project block that displays:
  • Project image with hover zoom
  • Title, description, tech tags
  • GitHub + live site buttons

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- TailwindCSS
- Font Awesome icons
- Optional scroll-triggered animation (via .js-scale-in-bottom)

===========================================================================
--}}

<!-- 📦 Project Card (Animated on scroll) -->
<div class="js-scale-in-bottom w-full flex flex-col lg:flex-row gap-10 items-center pl-2 lg:pl-10">

    <!-- 📸 Project Image -->
    <div class="w-full lg:w-[90%] shadow relative group bg-gray-100 dark:bg-[#1a1a1a] rounded-sm overflow-hidden">
        <img
            src="{{ asset('assets/images/brooks-gym-project-2.jpg') }}"
            alt="Brooks Gym Project Image"
            class="w-full h-[280px] md:h-[320px] lg:h-[360px] object-cover object-center transition duration-500 ease-in-out group-hover:scale-[1.05] rounded-sm"
        >
    </div>

    <!-- 📝 Project Details -->
    <div class="w-full lg:w-1/2 space-y-6 relative lg:ml-6">

        <!-- 🏷️ Label -->
        <p class="text-xs sm:text-sm font-semibold uppercase tracking-widest text-gray-500">
            Featured Project
        </p>

        <!-- 📌 Title -->
        <h3 class="text-xl md:text-3xl font-bold tracking-tight text-[#1b1b18] dark:text-sky-300 leading-snug">
            Brooks Gym – Functional Fitness Website
        </h3>

        <!-- 💬 Description Card -->
        <div class="bg-white/90 dark:bg-white/10 dark:backdrop-blur-sm p-5 md:p-6 rounded-md shadow-lg shadow-black/10 w-full lg:w-[120%] max-w-none z-10 lg:-ml-24 mt-4">
            <p class="text-sm md:text-base text-[#1b1b18] dark:text-gray-200 leading-relaxed">
                A custom-built fitness website for promoting services, boosting local SEO, and increasing gym memberships. It showcases class offerings, specialist trainers, and contact options, all optimized for performance and mobile responsiveness.
            </p>
        </div>

        <!-- 🧩 Stack + Actions -->
        <div class="flex flex-col w-full">

            <!-- 🛠️ Tech Stack Tags -->
            <div class="flex flex-wrap gap-3 text-sm tracking-tight text-[#1b1b18] dark:text-white">
                <span class="bg-gray-200 dark:bg-sky-900 dark:text-sky-200 px-3 py-1 rounded-full">Laravel</span>
                <span class="bg-gray-200 dark:bg-sky-900 dark:text-sky-200 px-3 py-1 rounded-full">Tailwind CSS</span>
                <span class="bg-gray-200 dark:bg-sky-900 dark:text-sky-200 px-3 py-1 rounded-full">JavaScript</span>
                <span class="bg-gray-200 dark:bg-sky-900 dark:text-sky-200 px-3 py-1 rounded-full">Docker</span>
            </div>

            <!-- 🔗 Buttons -->
            <div class="flex gap-6 justify-end items-center text-base text-[#1b1b18] dark:text-white mt-4 mr-8">
                <a href="https://github.com/Danilo-Giacinti/brooks-gym-laravel-app.git" target="_blank" aria-label="GitHub Repo" class="hover:text-gray-700 transition">
                    <i class="fab fa-github text-2xl"></i>
                </a>
                <a href="https://brooksgym.co.za" target="_blank" aria-label="Live Demo" class="hover:text-gray-700 transition">
                    <i class="fas fa-arrow-up-right-from-square text-xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>
