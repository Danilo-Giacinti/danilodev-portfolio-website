{{--
===============================================================================
🌐 Social Media Links Sidebar (Fixed Left)
===============================================================================
Purpose:
- Renders fixed-position social media icons on larger screens.
- Each icon animates slightly on hover and links to a social platform.

Version: 1.0.0
Author: Danilo Giacinti
Dependencies:
- Font Awesome Icons (fab class)
- Tailwind CSS for styling & animations

Placement:
- Typically included in layout files like `app.blade.php` or a global sidebar.

===============================================================================
--}}

<div class="hidden md:flex flex-col items-center fixed bottom-0 left-8 z-50 text-black dark:text-white">
    <!-- 🔗 Social Links -->
    <ul class="space-y-4 text-xl mb-6">
        <!-- 🐱 GitHub -->
        <li>
            <a href="https://github.com/Danilo-Giacinti" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
               class="inline-block hover:-translate-y-1 hover:text-blue-500 transform transition duration-300 ease-in-out">
                <i class="fab fa-github"></i>
            </a>
        </li>

        <!-- 📸 Instagram -->
        <li>
            <a href="https://www.instagram.com/danilogiuseppegiacinti" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
               class="inline-block hover:-translate-y-1 hover:text-blue-500 transform transition duration-300 ease-in-out">
                <i class="fab fa-instagram"></i>
            </a>
        </li>

        <!-- 💼 LinkedIn -->
        <li>
            <a href="https://www.linkedin.com/in/danilo-giacinti-30a221345/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
               class="inline-block hover:-translate-y-1 hover:text-blue-500 transform transition duration-300 ease-in-out">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </li>

        <!-- 📘 Facebook -->
        <li>
            <a href="https://www.facebook.com/danilo.g.giacinti" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
               class="inline-block hover:-translate-y-1 hover:text-blue-500 transform transition duration-300 ease-in-out">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
    </ul>

    <!-- 📏 Vertical Divider Line -->
    <div class="w-px h-24 bg-black/50 dark:bg-white/70 mt-4"></div>
</div>
