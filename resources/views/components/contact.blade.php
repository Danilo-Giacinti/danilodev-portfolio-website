
{{--===========================================================--}}
{{--📄 Contact Section — Blade/HTML--}}
{{--🎯 Purpose:--}}
{{--    Displays a simple, user-friendly contact section with:--}}
{{--    - Bold heading and intro message--}}
{{--    - Buttons to email or connect on LinkedIn--}}
{{--    - Optional friendly note--}}
{{--🧩 Dependencies:--}}
{{--    - Font Awesome icons (for envelope + LinkedIn)--}}
{{--    - TailwindCSS for layout, hover effects, and dark mode--}}
{{--🧑‍💻 Author: Danilo Giacinti--}}
{{--🧾 Version: 1.0.0--}}
{{--===========================================================--}}


<section id="contact" class="w-full py-24 px-6 flex items-center justify-center bg-white dark:bg-[#0f0f0f]">
    <div class="js-scale-in-bottom max-w-3xl w-full text-center space-y-10">

        <!-- 💬 Section Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] dark:text-white">
            Let’s work together
        </h2>

        <!-- 📝 Short Description / Intro -->
        <p class="text-base md:text-lg max-w-xl mx-auto text-[#1b1b18] dark:text-white">
            Whether you're hiring a full-stack developer or need help with a web project you're in the right place.
            This is my digital CV. Let’s collaborate and bring your ideas to life.
        </p>

        <!-- 📫 Contact Buttons: Email & LinkedIn -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="mailto:your@email.com"
               class="px-6 py-3 border border-gray-300 dark:border-white/20 rounded font-medium flex items-center gap-2
               text-[#1b1b18] dark:text-sky-300 hover:bg-gray-100 dark:hover:bg-white/10 hover:text-blue-600 transition">
                <i class="fas fa-envelope"></i> Email Me
            </a>
            <a href="https://www.linkedin.com/in/danilo-giacinti-30a221345/" target="_blank"
               class="px-6 py-3 border border-gray-300 dark:border-white/20 rounded font-medium flex items-center gap-2
               text-[#1b1b18] dark:text-sky-300 hover:bg-gray-100 dark:hover:bg-white/10 hover:text-blue-600 transition">
                <i class="fab fa-linkedin"></i> Connect on LinkedIn
            </a>
        </div>

        <!-- 📱 Friendly Follow-up Note -->
        <p class="text-sm text-gray-600 dark:text-gray-300">
            I'm always happy to connect – expect a reply soon!
        </p>

    </div>
</section>
