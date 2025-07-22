
{{--===========================================================--}}
{{--📄 Hero Section — Blade/HTML--}}
{{--🎯 Purpose:--}}
{{--    Homepage hero block with responsive text + image layout.--}}
{{--    Features:--}}
{{--    - Mobile-first column layout that switches on desktop--}}
{{--    - Animated profile image reveal--}}
{{--    - Intro headline + subhead--}}
{{--    - Quick scroll-to-about button + quote--}}
{{--🧩 Dependencies:--}}
{{--    - TailwindCSS (responsive grid, spacing, dark mode)--}}
{{--    - reveal-image-left (for image animation, via animations.css)--}}
{{--    - JS scroll behavior if enhanced--}}
{{--🧑‍💻 Author: Danilo Giacinti--}}
{{--🧾 Version: 1.0.0--}}
{{--===========================================================--}}


<main class="px-0 bg-gray-100 dark:bg-[#1a1a1a] text-[#1b1b18] dark:text-white transition-colors duration-300">
    <section id="home" class="w-full min-h-screen flex items-center justify-center pt-20 md:pt-0">

        <!-- 🧱 Responsive Two-Column Hero Layout (Stacked on mobile) -->
        <div class="flex flex-col md:flex-row w-full min-h-screen">

            <!-- 🧑‍💻 Left: Text Content Block -->
            <div class="w-full md:w-1/2 flex items-center justify-center px-6 md:px-12 py-12 md:py-0">
                <div class="max-w-lg text-left">

                    <!-- 🟢 Availability Badge -->
                    <span class="inline-block bg-green-500 text-white text-xs px-3 py-1 rounded-full mb-4">
                        🟢 Open for new projects
                    </span>

                    <!-- 👋 Greeting -->
                    <p class="text-sm tracking-wide text-gray-600 dark:text-gray-400 mb-2">
                        Hi, my name is
                    </p>

                    <!-- 👤 Main Headline -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                        <span class="text-[#1b1b18] dark:text-slate-300">Danilo Giacinti.</span><br />
                        <span class="text-gray-600 dark:text-slate-400">I build websites</span><br />
                        <span class="text-sky-500 dark:text-sky-600">and applications.</span>
                    </h1>

                    <!-- 📜 Short About Text -->
                    <p class="text-base text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        I'm a <span class="font-semibold text-black dark:text-sky-200">full-stack developer</span> focused on building
                        <span class="font-medium text-black dark:text-sky-200">fast</span>,
                        <span class="font-medium text-black dark:text-sky-200">scalable</span>, and
                        <span class="font-medium text-black dark:text-sky-200">beautiful</span> web experiences with
                        <span class="font-medium text-black dark:text-sky-200">modular systems</span>,
                        <span class="font-medium text-black dark:text-sky-200">modern architecture</span>, and
                        <span class="font-medium text-black dark:text-sky-200">AI Engineering</span>.
                    </p>


                    <!-- 🔗 Call-to-Action Button -->
                    <a href="#about"
                       class="inline-block bg-blue-600 dark:bg-white text-white dark:text-[#1b1b18] px-6 py-3 rounded-md font-semibold hover:bg-blue-700 dark:hover:bg-gray-200 transition hover:scale-105 shadow-md hover:shadow-lg duration-300 ease-in-out">
                        Find out more
                    </a>

                    <!-- 🧠 Personal Quote -->
                    <figure class="mt-8 max-w-xl">
                        <blockquote class="border-l-4 border-gray-300 dark:border-gray-600 pl-5 italic text-sm text-gray-500 dark:text-gray-400">
                            “I don’t just write code — I craft
                            <span class="font-medium text-black dark:text-sky-200">reliable</span>,
                            <span class="font-medium text-black dark:text-sky-200">creative</span> digital experiences from concept to launch.”
                        </blockquote>
                    </figure>
                </div>
            </div>

            <!-- 🖼️ Right: Profile Image (Reveal Animation) -->
            <div class="w-full md:w-1/2 h-[320px] md:h-auto overflow-hidden">
                <div class="reveal-image-left w-full h-full">
                    <img
                        src="{{ asset('assets/images/profile-picture-2.jpg') }}"
                        alt="Your photo"
                        class="w-full h-full object-cover object-top"
                    />
                </div>
            </div>

        </div>
    </section>
</main>
