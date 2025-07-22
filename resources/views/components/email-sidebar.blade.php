
{{--===========================================================--}}
{{--📄 Fixed Email Link — Blade/HTML--}}
{{--🎯 Purpose:--}}
{{--    Displays a vertical email link on large screens (right bottom corner).--}}
{{--    Adds subtle hover motion and includes a vertical line for visual structure.--}}
{{--🧩 Dependencies:--}}
{{--    - TailwindCSS (for positioning, colors, transitions)--}}
{{--    - Hidden on mobile (`hidden md:flex`)--}}
{{--🧑‍💻 Author: Danilo Giacinti--}}
{{--🧾 Version: 1.0.0--}}
{{--===========================================================--}}


<div class="hidden md:flex flex-col items-center fixed bottom-0 right-8 z-50 text-black dark:text-white">

    <!-- ✉️ Rotated Email Text Link -->
    <a href="mailto:danilo@modatechs.com"
       class="text-sm rotate-90 tracking-widest mb-24 hover:-translate-y-1 hover:text-blue-500 transform transition duration-300 ease-in-out">
        danilo@modatechs.com
    </a>


    <!-- 📏 Vertical Divider Line -->
    <div class="w-px h-24 bg-black/50 dark:bg-white/70"></div>

</div>
