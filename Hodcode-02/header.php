<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-gray-100"); ?>>
    <header class="bg-white border-b border-gray-300">
        <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <?php if (function_exists("the_custom_logo")) {
                    $logo = get_custom_logo();
                    $logo = str_replace('custom-logo"', 'custom-logo h-10 w-auto"', $logo);
                    echo $logo;
                } ?>
                <?php
                wp_nav_menu([
                    "theme_location" => 'Header',
                    "menu_class" => "flex gap-8 text-gray-800",
                    "container" => false
                ]);
                ?>
                <!-- <div class="flex space-x-4 mr-6">
                    <span class="cursor-pointer text-gray-800 hover:text-orange-300">خانه</span>
                    <span class="cursor-pointer text-gray-800 hover:text-orange-300">محصولات</span>
                </div> -->
            </div>

            <div class="flex items-center space-x-4">
                <a href="<?php echo site_url('/contact'); ?>" class="cursor-pointer text-gray-800">ارتباط با ما</a>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>

        </div>
    </header>