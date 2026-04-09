<?php

// Purpose: Shared navigation partial with route links and auth actions.
// Ensure helper functions such as urlIs() are available when this partial is rendered directly.
if (!function_exists('urlIs')) {
    require_once __DIR__ . '/../../core/function.php';
}
?>

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <!-- Left side -->
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo"
                        class="size-8" />
                </div>

                <div class="hidden md:block ml-10">
                    <div class="flex items-baseline space-x-4">
                        <a href="/"
                            class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Home
                        </a>

                        <a href="/about"
                            class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            About
                        </a>

                        <?php if ($_SESSION['user'] ?? false): ?>
                            <a href="/notes"
                                class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                                Notes
                            </a>
                        <?php endif; ?>

                        <a href="/contact"
                            class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Contact
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right side -->
            <div class="hidden md:flex items-center space-x-4">

                <!-- Notification -->
                <button type="button"
                    class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-none">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                        <path
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <?php if ($_SESSION['user'] ?? false): ?>
                    <form method="POST" action="/session">
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit"
                            class="text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            Log Out
                        </button>
                    </form>
                <?php else: ?>
                    <a href="/register"
                        class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                        Register
                    </a>
                    <a href="/login"
                        class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                        Login
                    </a>
                <?php endif; ?>

            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>