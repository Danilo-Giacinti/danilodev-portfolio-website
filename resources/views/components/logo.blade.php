{{--
===============================================================================
👑 Logo Icon — Static Version (No Animation)
Author: Danilo Giacinti
Usage:
- Use this wherever you need a clean, static version of your logo
- Works great for favicons, footers, top-left nav branding, etc.

Dark mode support via Tailwind classes.
===============================================================================
--}}

<div class="relative w-24 h-24 mx-auto">
    <!-- 👑 Crown -->
    <img
        src="{{ asset('assets/icons/crown.png') }}"
        alt="Crown"
        class="absolute -top-10 left-1/2 w-16 h-auto transform -translate-x-1/2 dark:filter dark:invert dark:brightness-[150%]"
    />

    <!-- ⚪ Circle with Letter D -->
    <div class="w-full h-full rounded-full border-2 border-black dark:border-white flex items-center justify-center">
        <span class="text-3xl font-medium text-black dark:text-white" style="font-family: 'Satoshi', sans-serif;">
            D
        </span>
    </div>
</div>
