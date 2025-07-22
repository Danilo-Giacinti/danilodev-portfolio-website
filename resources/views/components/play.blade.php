{{--
=======================================================================
🧪 Playground Section — Interactive UI Demos
=======================================================================
Purpose:
- Show off interactive UI features like theme switcher, font toggle, and terminal.
- Boosts portfolio interactivity and gives devs/clients something fun to test.

Includes:
• Font switcher (Comic Neue ↔ Instrument Sans)
• Light/Dark theme toggle
• Simulated terminal with dev-focused commands (whoami, skills, etc.)

Author: Danilo Giacinti
Version: 1.0.0
Dependencies: TailwindCSS, FontAwesome, Alpine/JS modules in `resources/js/ui/`
========================================================================
--}}

<section id="playground" class="w-full py-24 px-6 bg-white dark:bg-[#0f0f0f] text-[#1b1b18] dark:text-white">

    <!-- 🧾 Section Heading w/ Animations -->
    <div class="max-w-7xl mx-auto text-left mb-12">
        <div class="js-section-label mb-6 ml-2 max-w-xl">
            <div class="flex items-center">
                <h2 class="js-section-heading text-3xl font-bold tracking-tight text-[#1b1b18] dark:text-white mr-4 whitespace-nowrap opacity-0 -translate-x-10 transition-all duration-700">
                    Play
                </h2>
                <div class="js-section-line flex-1 h-px bg-black/10 dark:bg-white/20 opacity-0 translate-x-10 transition-all duration-700 delay-200"></div>
            </div>
        </div>
    </div>

    <!-- 🧱 Playground Cards -->
    <div class="js-scale-in-bottom grid grid-cols-1 md:grid-cols-12 gap-6 max-w-7xl mx-auto px-4">

        <!-- 🅰️ Font Toggle Card -->
        <button
            onclick="toggleFont()" {{-- Linked to resources/js/ui/fontToggle.js --}}
        id="font-toggle-card"
            class="md:col-span-3 w-full text-left p-8 rounded-xl bg-gray-100 dark:bg-[#1b1b18] text-[#1b1b18] dark:text-white shadow hover:ring-2 hover:ring-sky-400 transition space-y-4 h-full"
        >
            <div id="font-preview" class="text-9xl leading-none">Aa</div>
            <div class="space-y-1">
                <h3 class="text-xl font-semibold dark:text-white">Typeface</h3>
                <p id="font-description" class="text-base text-gray-600 dark:text-gray-400">
                    You are currently viewing Comic Neue 🤪 typeface from Google Fonts. Maybe you'd like to switch things up?
                </p>
            </div>
        </button>

        <!-- 🌗 Theme Toggle Card -->
        <button
            onclick="toggleTheme()" {{-- Linked to resources/js/ui/darkModeToggle.js --}}
        class="md:col-span-3 text-left w-full p-8 rounded-xl bg-gray-100 dark:bg-[#1b1b18] text-[#1b1b18] dark:text-white shadow hover:ring-2 hover:ring-sky-400 transition space-y-4 h-full"
        >
            <div class="flex items-center justify-start space-x-[-28px]">
                <div class="w-20 h-20 rounded-full bg-black border border-white z-20"></div>
                <div class="w-20 h-20 rounded-full bg-white border border-white z-30"></div>
            </div>
            <div class="space-y-2 pt-2">
                <h3 class="text-xl font-semibold dark:text-white">Palette</h3>
                <p class="text-base text-gray-600 dark:text-gray-300">
                    Are things a little dark around here? <br>
                    Switch up the palette mode to suit your preference.
                </p>
            </div>
        </button>

        <!-- 💻 Terminal Simulator Card -->
        <div class="md:col-span-6 w-full p-8 rounded-xl bg-[#e6f0ff] dark:bg-[#0d1b2a] text-[#1b1b18] dark:text-white shadow-inner space-y-4 h-full">

            <!-- 🧾 Terminal Description -->
            <div class="text-[#1b1b18] dark:text-white">
                <h3 class="text-xl font-semibold">Mini Terminal</h3>
                <p class="text-base text-[#264f78] dark:text-gray-300">
                    Try typing <span class="font-semibold text-[#0050b3] dark:text-cyan-300">whoami</span>,
                    <span class="font-semibold text-[#0050b3] dark:text-cyan-300">skills</span>,
                    <span class="font-semibold text-[#0050b3] dark:text-cyan-300">assist</span>, or
                    <span class="font-semibold text-[#0050b3] dark:text-cyan-300">help</span> below.
                </p>
            </div>

            <!-- 🖥 Terminal Output Box -->
            <div id="terminal"
                 class="w-full max-w-none bg-[#d0e3ff] dark:bg-[#1a2c3b] text-[#0050b3] dark:text-green-400 px-6 py-4 rounded h-48 overflow-auto shadow-inner text-sm leading-relaxed">
                <p><span class="text-[#0050b3]">C:\</span> <span class="text-[#007a3d]">Write-Host</span> <span class="text-[#0088cc]">"Type a command..."</span></p>
            </div>

            <!-- ⌨️ Terminal Input Field -->
            <input
                id="terminal-input"
                type="text"
                class="w-full px-3 py-2 text-sm border border-[#aac8ff] dark:border-[#444] rounded bg-white dark:bg-[#111] text-[#1b1b18] dark:text-white placeholder:text-sm"
                placeholder="Type command"
            />
        </div>
    </div>
</section>
