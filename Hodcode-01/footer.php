<footer class="bg-white border-t border-gray-300">
    <div class="max-w-screen-xl mx-auto px-4 py-6 flex items-center justify-between">
        <div class="flex items-center">
            <?php
            if (function_exists("the_custom_logo")) {
                $logo = get_custom_logo();
                $logo = str_replace('custom-logo"', 'custom-logo h-10 w-auto"', $logo);
                echo $logo;
            }
            ?>
        </div>

        <div class="text-gray-600 text-center flex-1">
            کلیه حقوق این سایت برای پارت محفوظ می‌باشد.
        </div>

        <div class="flex items-center space-x-4">
            <a href="#" class="rounded-full border border-gray-300 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="grayscale" viewBox="0 0 24 24" class="w-6 h-6 text-blue-400">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14.86 4.48 4.48 0 0 0 1.95-2.48 9.06 9.06 0 0 1-2.87 1.1A4.48 4.48 0 0 0 16.5 2a4.48 4.48 0 0 0-4.44 5.5A12.76 12.76 0 0 1 2.89 3.15a4.48 4.48 0 0 0 1.38 6A4.41 4.41 0 0 1 2 8.87v.05a4.48 4.48 0 0 0 3.6 4.39 4.52 4.52 0 0 1-2.02.08 4.48 4.48 0 0 0 4.18 3.11A9 9 0 0 1 0 19.54a12.72 12.72 0 0 0 6.92 2.02c8.3 0 12.85-6.88 12.85-12.85 0-.2 0-.42-.02-.62A9.22 9.22 0 0 0 23 3z" />
                </svg>
            </a>

            <a href="#" class="rounded-full border border-gray-300 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="grayscale" viewBox="0 0 24 24" class="w-6 h-6 text-blue-700">
                    <path d="M19 3A2 2 0 0 1 21 5v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14zM8.5 17V10.5H6v6.5h2.5zM7.25 9.25A1.25 1.25 0 1 0 7.24 6.75a1.25 1.25 0 0 0 0 2.5zM18 17v-3c0-1.67-1-2.5-2.25-2.5-1.02 0-1.49.58-1.75 1V10.5H11v6.5h2.5v-3c0-.55.22-1 1-1s1.5.77 1.5 1.75v2.75H18z" />
                </svg>
            </a>

            <a href="#" class="rounded-full border border-gray-300 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="grayscale" viewBox="0 0 24 24" class="w-6 h-6 text-blue-600">
                    <path d="M22 12a10 10 0 1 0-11.5 9.87v-6.98h-3v-2.9h3v-2.22c0-3 1.8-4.64 4.53-4.64 1.31 0 2.68.24 2.68.24v3h-1.5c-1.48 0-1.94.93-1.94 1.88v2.74h3.3l-.53 2.9h-2.77v6.98A10 10 0 0 0 22 12z" />
                </svg>
            </a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>