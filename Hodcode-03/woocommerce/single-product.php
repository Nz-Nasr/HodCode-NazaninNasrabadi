<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

get_header(); 
?>

<div class="max-w-7xl mx-auto px-6 py-10 flex flex-col gap-10">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $price = get_post_meta(get_the_ID(), 'price', true);
            $oldPrice = get_post_meta(get_the_ID(), 'old_price', true);
            $discount = 4; 
            $features = get_post_meta(get_the_ID(), 'features', true);
    ?>

    <div class="rounded-lg p-6 flex justify-center items-center">
        <?php the_post_thumbnail('full', ['class' => 'object-contain w-full']); ?>
    </div>

    <div class="flex flex-row-reverse items-center justify-between text-right w-full gap-4">
        <div class="flex items-center gap-3">
            <div class="bg-red-600 text-white text-xs font-bold px-2 rounded"><?= $discount ?>٪</div>
            <span class="line-through text-gray-400 text-sm"><?= $oldPrice ?></span>
            <span class="font-semibold text-base"><?= $price ?></span>
            <span class="text-gray-500 text-sm">تومان</span>
        </div>
        <h2 class="text-lg font-semibold"><?php the_title(); ?></h2>
    </div>

    <div class="text-gray-600 text-justify leading-relaxed text-sm" style="direction: rtl;">
        <?php echo get_the_content(); ?>
    </div>

    <button
        class="mt-6 bg-blue-400 text-white flex items-center gap-2 justify-center py-3 px-6 rounded hover:bg-blue-500 w-48 ml-auto"
        type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m5-9l2 9" />
        </svg>
        افزودن به سبد
    </button>

    <?php
            if ($features) {
                $features_array = explode('|', $features);
                echo '<ul class="text-sm list-disc list-inside mt-4">';
                foreach ($features_array as $feature) {
                    echo '<li>' . trim($feature) . '</li>';
                }
                echo '</ul>';
            }
    ?>

    <?php
        } 
    } 
    ?>

</div>

<?php 

get_footer(); 
?>