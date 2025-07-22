
{{--===========================================================--}}
{{--📄 About Section — Blade/HTML--}}
{{--🎯 Purpose:--}}
{{--    Displays an animated “About Me” section with:--}}
{{--    - Scroll-animated heading--}}
{{--    - Interactive slide-based bio--}}
{{--    - Tech stack list--}}
{{--    - Full-stack and DevOps info cards (with animation)--}}
{{--🧩 Dependencies:--}}
{{--    - JS: AboutSectionSlider.js (for slide navigation)--}}
{{--    - JS: sectionHeadingAnimations.js (for heading + line animation)--}}
{{--    - JS: scaleInAnimations.js (for scroll-based fade-ins)--}}
{{--    - CSS: Tailwind + custom animations.css--}}
{{--    - External: <lottie-player> (for cloud animation)--}}
{{--🧑‍💻 Author: Danilo Giacinti--}}
{{--🧾 Version: 1.0.0--}}
{{--===========================================================--}}


<section id="about"
         class="w-full py-24 px-6 flex items-center justify-center bg-white dark:bg-[#0f0f0f] transition-colors duration-300">
    <div class="max-w-7xl w-full">

        <!-- 🏷️ Section Header (Animated on Scroll) -->
        <div class="js-section-label flex items-center mb-10 ml-2 max-w-xl">
            <h2 class="js-section-heading text-3xl font-bold tracking-tight dark:text-white text-[#1b1b18] mr-4 whitespace-nowrap opacity-0 -translate-x-10 transition-all duration-700">
                About Me
            </h2>
            <div
                class="js-section-line flex-1 h-px dark:bg-white/30 bg-black/10 opacity-0 translate-x-10 transition-all duration-700 delay-200"></div>
        </div>

        <!-- 🧱 Responsive Grid Layout -->
        <div class="js-scale-in-bottom flex flex-col md:flex-row gap-6">

            <!-- 👤 Left: About Slider + Tech Stack -->
            <div class="flex-1 p-8 rounded-lg shadow-sm border border-gray-300 dark:border-white/10 bg-gray-100 dark:bg-[#1a1a1a] relative overflow-hidden">
                <div id="aboutSlides" class="transition-all duration-500">

                    <!-- 🧑‍💻 About Me Slides (One visible at a time) -->
                    <div id="about-section" class="min-h-[200px] md:min-h-[220px]">
                        <div class="about-slide block" id="slide-1">
                            <p class="text-xl md:text-2xl leading-relaxed mb-6 dark:text-gray-100">
                                <span class="reveal">Hi,</span> <span class="reveal">I'm</span> <span class="reveal">Danilo.</span>
                                <span class="reveal">I'm</span> <span class="reveal">a</span> <span class="reveal">full-stack</span> <span class="reveal">website</span>
                                <span class="reveal">and</span> <span class="reveal">application</span> <span class="reveal">developer.</span>
                                <span class="reveal">I</span> <span class="reveal">create</span> <span class="reveal">fast,</span>
                                <span class="reveal">responsive,</span> <span class="reveal">and</span> <span class="reveal">creative</span>
                                <span class="reveal">digital</span> <span class="reveal">experiences</span>
                                <span class="reveal">that</span> <span class="reveal">are</span> <span class="reveal">user-first,</span>
                                <span class="reveal">high-performing,</span> <span class="reveal">and</span>
                                <span class="reveal">built</span> <span class="reveal">to</span> <span class="reveal">last.</span>
                            </p>
                        </div>

                        <div class="about-slide hidden" id="slide-2">
                            <p class="text-xl md:text-2xl leading-relaxed mb-6 dark:text-gray-100">
                                <span class="reveal">I</span> <span class="reveal">handle</span> <span class="reveal">everything</span>
                                <span class="reveal">from</span> <span class="reveal">frontend</span> <span class="reveal">to</span>
                                <span class="reveal">backend,</span> <span class="reveal">including</span> <span class="reveal">SEO,</span>
                                <span class="reveal">DevOps,</span> <span class="reveal">Docker</span> <span class="reveal">environments,</span>
                                <span class="reveal">cloud</span> <span class="reveal">integration,</span> <span class="reveal">and</span>
                                <span class="reveal">user-focused</span> <span class="reveal">UI/UX</span> <span class="reveal">design</span>
                                <span class="reveal">for</span> <span class="reveal">fast,</span> <span class="reveal">modern</span>
                                <span class="reveal">web</span> <span class="reveal">experiences.</span>
                            </p>
                        </div>
                        <div class="about-slide hidden" id="slide-3">
                            <p class="text-xl md:text-2xl leading-relaxed mb-6 dark:text-gray-100">
                                <span class="reveal">I</span> <span class="reveal">love</span> <span class="reveal">turning</span> <span class="reveal">ideas</span>
                                <span class="reveal">into</span> <span class="reveal">launch-ready</span> <span class="reveal">products</span> <span class="reveal">with</span>
                                <span class="reveal">clean</span> <span class="reveal">code,</span> <span class="reveal">smart</span> <span class="reveal">tools,</span>
                                <span class="reveal">and</span> <span class="reveal">a</span> <span class="reveal">focus</span> <span class="reveal">on</span>
                                <span class="reveal">real-world</span> <span class="reveal">performance.</span> <span class="reveal">I</span> <span class="reveal">aim</span>
                                <span class="reveal">to</span> <span class="reveal">deliver</span> <span class="reveal">reliable</span> <span class="reveal">results</span>
                                <span class="reveal">efficiently</span> <span class="reveal">while</span> <span class="reveal">always</span>
                                <span class="reveal">looking</span> <span class="reveal">for</span> <span class="reveal">better</span>
                                <span class="reveal">ways</span> <span class="reveal">to</span> <span class="reveal">build.</span>
                            </p>
                        </div>
                    </div>

                    <!-- ⚙️ Tech Stack List -->
                    <div class="mt-6">
                        <p class="text-sm font-semibold text-gray-500 dark:text-sky-500 uppercase mb-3 tracking-wide">
                            Tech Stack & Tools I Use
                        </p>
                        <ul class="grid grid-cols-2 sm:grid-cols-3 gap-y-2 gap-x-6 text-[14px] text-[#3f3f3f] dark:text-gray-300 leading-relaxed mb-8">
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                Laravel
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                Tailwind CSS
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                JavaScript
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                React
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                Docker
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                WordPress (SEO)
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                MySQL
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                CI/CD
                            </li>
                            <li class="pl-4 relative before:content-['▹'] before:absolute before:left-0 before:text-green-500">
                                AI Tools
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 🔘 Slider Dots + Arrow Navigation -->
                <div class="absolute bottom-4 left-6 right-6 flex items-center justify-between">
                    <div class="flex gap-2">
                        <span class="w-2 h-2 rounded-full dot bg-black dark:bg-white" data-slide="1"></span>
                        <span class="w-2 h-2 rounded-full dot bg-gray-300 dark:bg-gray-600" data-slide="2"></span>
                        <span class="w-2 h-2 rounded-full dot bg-gray-300 dark:bg-gray-600" data-slide="3"></span>
                    </div>

                    <div class="flex gap-2">
                        <button onclick="prevSlide()" class="p-1 text-gray-300 dark:text-gray-600 hover:text-black dark:hover:text-white hover:scale-110 active:scale-95 transition-all duration-200 ease-in-out">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button onclick="nextSlide()" class="p-1 text-gray-300 dark:text-gray-600 hover:text-black dark:hover:text-white hover:scale-110 active:scale-95 transition-all duration-200 ease-in-out">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 🧠 Right: Feature Cards (Dev + Cloud) -->
            <div class="flex flex-col gap-4 flex-1">
                <!-- 💻 Full-Stack Developer Card -->
                <!-- 💻 Full-Stack Developer Card WITH ICONS INSIDE -->
                <div
                    class="p-6 rounded-lg shadow-sm border border-gray-300 dark:border-white/10 bg-gray-100 dark:bg-[#1a1a1a]">

                    <!-- 🔹 Heading -->
                    <h3 class="text-xl font-semibold mb-4 tracking-tight text-gray-900 dark:text-sky-300">
                        Full-Stack Development
                    </h3>

                    <!-- 🔸 Description -->
                    <p class="text-base mb-6 text-gray-700 dark:text-gray-300 leading-relaxed">
                        I build fast, modern websites and web applications from frontend to backend using Laravel,
                        Tailwind CSS, JavaScript, and APIs.
                    </p>

                    <!-- 🔁 ICON SCROLLER INSIDE CARD -->
                    <div class="overflow-hidden mx-auto relative rounded-lg" style="width: 320px">
                        <div id="tech-carousel" class="flex gap-3 transition-none will-change-transform" style="width: max-content">

                            {{-- 🔧 Devicon Icons --}}
                            @php
                                $techIcons = [
                                    'Laravel' => 'devicon-laravel-plain',
                                    'PHP' => 'devicon-php-plain',
                                    'JavaScript' => 'devicon-javascript-plain',
                                    'Docker' => 'devicon-docker-plain',
                                    'HTML5' => 'devicon-html5-plain',
                                    'CSS3' => 'devicon-css3-plain',
                                    'Bootstrap' => 'devicon-bootstrap-plain',
                                    'TailwindCSS' => 'devicon-tailwindcss-plain',
                                    'Alpine.js' => 'devicon-alpinejs-plain',
                                    'Python' => 'devicon-python-plain',
                                    'WordPress' => 'devicon-wordpress-plain',
                                    'MySQL' => 'devicon-mysql-plain',
                                    'PostgreSQL' => 'devicon-postgresql-plain',
                                    'React' => 'devicon-react-original',
                                    'Vue.js' => 'devicon-vuejs-plain',
                                    'Google' => 'devicon-google-plain',
                                    'Git' => 'devicon-git-plain',
                                    'GitHub' => 'devicon-github-original'
                                ];
                            @endphp

                            @foreach($techIcons as $name => $icon)
                                <div
                                    class="w-12 h-12 p-5 flex items-center justify-center rounded
        border border-neutral-300 dark:border-white/10
        hover:border-black/30 dark:hover:border-white/50
        bg-white/10 dark:bg-white/5
        transition-colors duration-200 ease-in-out"
                                    title="{{ $name }}">
                                    <i class="{{ $icon }} colored text-2xl"></i>
                                    <p class="sr-only">{{ $name }}</p>
                                </div>
                            @endforeach


                        </div>
                    </div>

                </div>


                <!-- ⚙️ DevOps / Optimization Card with Cloud Animation -->
                <div
                    class="p-6 rounded-lg shadow-sm border border-gray-300 dark:border-white/10 bg-gray-100 dark:bg-[#1a1a1a]">
                    <h3 class="text-xl font-semibold mb-4 tracking-tight dark:text-sky-300">Systems, Cloud &
                        Optimization</h3>
                    <p class="text-base mb-4 text-gray-700 dark:text-gray-300 leading-relaxed">
                        I manage deployment, DevOps, technical SEO, and performance optimization using Docker, CI/CD pipelines, and cloud platforms like Google Cloud, DigitalOcean, Laravel Forge, and Cloudflare.
                    </p>
                    <div class="flex justify-center mt-4">
                        <lottie-player
                            src="{{ asset('assets/animations/cloud-gear.json') }}"
                            background="transparent"
                            speed="1"
                            loop
                            autoplay
                            class="w-28 h-28"
                        ></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

