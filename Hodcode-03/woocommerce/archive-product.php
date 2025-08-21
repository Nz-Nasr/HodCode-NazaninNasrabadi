<?php
defined('ABSPATH') || exit;
get_header('shop');
?>

<div id="page" class="site max-w-screen-xl mx-auto px-4 py-8">
    <div class="flex justify-start space-x-3 mb-8 pt-4">
        <a href="<?= get_post_type_archive_link('product') ?>"
            class="px-4 py-2 rounded-full bg-white text-gray-700 border border-gray-400 hover:bg-blue-500 hover:text-white transition">
            همه محصولات
        </a>
        <?php
		$terms = get_terms([
			'taxonomy' => 'product_cat',
			'hide_empty' => false
		]);
		foreach ($terms as $term) {
			echo '<a href="' . get_term_link($term) . '" class="px-4 py-2 rounded-full bg-white text-gray-700 border border-gray-400 hover:bg-blue-500 hover:text-white transition">' . $term->name . '</a>';
		}
		?>
    </div>

    <main id="main" class="site-main">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-12">
            <?php
			if (woocommerce_product_loop()) {
				while (have_posts()) {
					the_post();
					global $product;

					$regular_price = $product->get_regular_price();
					$sale_price = $product->get_sale_price();
					$discount = ($regular_price && $sale_price) ? round(100 - ($sale_price / $regular_price * 100)) : 0;
					$categories = wc_get_product_category_list(get_the_ID(), ', ');
			?>
            <div class="bg-white rounded-md flex flex-col gap-4 shadow p-4">
                <?php if (has_post_thumbnail()) the_post_thumbnail('full', ['class' => 'h-full w-full']); ?>

                <h3 class="font-semibold text-right pr-4 mt-2"><?php the_title(); ?></h3>

                <?php if ($categories): ?>
                <span class="text-sm text-gray-500 text-right pr-4"><?= $categories ?></span>
                <?php endif; ?>

                <!-- قیمت و تخفیف -->
                <div class="flex items-center justify-between mt-2 px-4">
                    <!-- تخفیف سمت چپ -->
                    <?php if ($discount > 0): ?>
                    <div
                        class="bg-red-500 text-white text-xs font-bold w-8 h-8 flex items-center justify-center rounded">
                        4٪
                    </div>
                    <?php endif; ?>

                    <div class="flex items-center gap-2">
                        <?php if ($sale_price): ?>
                        <span class="text-gray-400 text-sm line-through"><?= number_format($regular_price) ?></span>
                        <span class="font-semibold text-black text-base"><?= number_format($sale_price) ?> تومان</span>
                        <?php else: ?>
                        <span class="font-semibold text-black text-base"><?= number_format($regular_price) ?>
                            تومان</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flex gap-3 p-4">
                    <a href="<?php the_permalink() ?>"
                        class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300 text-center">
                        مشاهده جزئیات
                    </a>
                    <a href="?add-to-cart=<?= get_the_ID() ?>"
                        class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400 text-center">
                        افزودن به سبد
                    </a>
                </div>
            </div>
            <?php
				}
			} else {
				echo '<p>هیچ محصولی پیدا نشد.</p>';
			}
			?>
        </div>

    </main>
</div>

<?php get_footer('shop'); ?>