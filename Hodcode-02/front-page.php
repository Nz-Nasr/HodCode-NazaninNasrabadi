<?php get_header() ?>
<div id="page" class="site max-w-screen-xl mx-auto px-4 py-8">


  <div class="flex justify-start space-x-3 mb-8 pt-4">
    <?php
    $terms = get_terms([
      'taxonomy' => 'product_category',
      'hide_empty' => false
    ]);
    echo '<a href="#" class="px-4 py-2 rounded-full bg-blue-500 text-gray-100">همه محصولات</a>';
    foreach ($terms as $term) {
      echo '<a href="' . get_term_link($term) . '" class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">' . $term->name . '</a>';
    }
    ?>
  </div>

  <main id="main" class="site-main">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-12">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          $price = get_post_meta(get_the_ID(), 'price', true);
          $oldPrice = get_post_meta(get_the_ID(), 'old_price', true);
          $discount = 4; 
      ?>
          <div class="bg-white rounded-md flex flex-col gap-4 shadow">
             <?php the_post_thumbnail('full', ['class' => 'h-full w-full']); ?>
            <h3 class="font-semibold text-right pr-4"><?php the_title(); ?></h3>
            <?php
            $terms = get_the_terms(get_the_ID(), 'product_category');
            if ($terms && $terms[0]) {
              echo '<span class="text-sm text-gray-500 text-right pr-4">' . $terms[0]->name . '</span>';
            }
            ?>
            <div class="flex items-center justify-between px-4">
              <div class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
                <?= $discount ?>٪
              </div>
              <div class="flex items-center gap-2">
                <span class="line-through text-gray-400 text-sm"><?= $oldPrice ?></span>
                <span class="font-semibold text-sm"><?= $price ?></span>
                <span class="text-gray-400 text-sm">تومان</span>
              </div>
            </div>
            <div class="flex gap-3 p-4">
              <a href="<?php the_permalink() ?>" class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300 text-center">
                مشاهده جزئیات
              </a>
              <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
                افزودن به سبد
              </button>
            </div>
          </div>
      <?php
        }
      } else {
        echo '<p>هیچ محصولی پیدا نشد.</p>';
      }
      ?>
    </div>

    <div class="flex justify-center gap-2">
      <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">قبلی</button>
      <button class="px-3 py-1 bg-blue-500 text-white rounded">1</button>
      <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">2</button>
      <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">بعدی</button>
    </div>

  </main>
</div>
<?php get_footer() ?>