<?php get_header() ?>
 <div id="page" class="site max-w-screen-xl mx-auto px-4 py-8">

   <div class="flex justify-start space-x-2 mb-6">
     <button class="px-4 py-2 rounded-full bg-blue-500 text-gray-100">همه محصولات</button>
     <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">دوربین</button>
     <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">کنسول بازی</button>
     <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">هدفون</button>
     <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">وسایل گیمینگ</button>
     <button class="px-4 py-2 rounded-full border border-gray-400 text-gray-700">هدست</button>
   </div>

   <main id="main" class="site-main">
     <?php
      // if (have_posts()) {
      //   while (have_posts()) {
      //     the_post();
      //     the_title('<h2>', '</h2>');
      //     the_content();
      //   }
      // } else {
      //   echo '<p>No content found.</p>';
      // }
      ?>
     <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product1.png"
           alt="دوربین دیجیتال آکسون مدل AX6062" class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">دوربین دیجیتال آکسون مدل AX6062</h3>
         <span class="text-sm text-gray-500 text-right pr-4">دوربین</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product2.png" alt="دوربین دیجیتال کانن مدل EOS 250D"
           class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">دوربین دیجیتال کانن مدل EOS 250D</h3>
         <span class="text-sm text-gray-500 text-right pr-4">دوربین</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product3.png" alt="هدفون بلوتوثی هایلو مدل X1 2023"
           class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">هدفون بلوتوثی هایلو مدل X1 2023</h3>
         <span class="text-sm text-gray-500 text-right pr-4">هدفون</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product4.png" alt="هدست بلوتوثی سونی مدل WH-CH720N"
           class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">هدست بلوتوثی سونی مدل WH-CH720N</h3>
         <span class="text-sm text-gray-500 text-right pr-4">هدفون</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product5.png" alt="هدفون گیمینگ لوتوثی سونی مدل InZone H9"
           class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">هدفون گیمینگ لوتوثی سونی مدل InZone H9</h3>
         <span class="text-sm text-gray-500 text-right pr-4">هدفون</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>

       <div class="bg-white rounded-md flex flex-col gap-4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/product6.png" alt="هدست بلوتوث استریو سونی مدل SBH54"
           class="object-cover rounded">
         <h3 class="font-semibold text-right pr-4">هدست بلوتوث استریو سونی مدل SBH54</h3>
         <span class="text-sm text-gray-500 text-right pr-4">هدفون</span>
         <div class="flex items-center justify-between px-4">
           <div
             class="bg-red-500 text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded">
             ۴٪</div>
           <div class="flex items-center gap-2 text-right">
             <span class="line-through text-gray-400 text-sm">۲۸,۴۴۴,۰۰۰</span>
             <span class="font-semibold text-sm">۲۷,۳۹۹,۰۰۰</span>
             <span class="text-gray-400 text-sm">تومان</span>
           </div>
         </div>
         <div class="flex gap-3 p-4">
           <button class="flex-1 bg-blue-500 text-white py-3 text-sm rounded-md hover:bg-blue-400">
             افزودن به سبد
           </button>
           <button class="flex-1 bg-gray-200 text-gray-700 py-3 text-sm rounded-md hover:bg-gray-300">
             مشاهده جزئیات
           </button>
         </div>
       </div>
     </div>
     <div class="flex justify-center gap-2 mt-4">
       <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">قبلی</button>
       <button class="px-3 py-1 bg-blue-500 text-white rounded">1</button>
       <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">2</button>
       <button class="px-3 py-1 border border-gray-400 rounded text-gray-700">بعدی</button>
     </div>

   </main>

 </div>

 <?php get_footer() ?>