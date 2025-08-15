<?php  get_header() ?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ارتباط با ما</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
</head>

<body class="flex flex-col items-center justify-center min-h-screen p-4">

    <div class="text-center mb-6">
        <h2 class="text-gray-800 font-bold text-2xl mb-2">ارتباط با ما</h2>
        <p class="text-gray-500 text-sm">در صورت داشتن سوال یا بروز مشکل در سایت از طریق فرم زیر با ما در ارتباط باشید.
        </p>
    </div>

    <form class="w-full max-w-lg p-6 rounded-lg border border-gray-300 space-y-4">
        <div>
            <label for="name" class="block text-gray-700 mb-1">نام</label>
            <input id="name" type="text" placeholder="نام خود را وارد نمایید."
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" />
        </div>

        <div>
            <label for="email" class="block text-gray-700 mb-1">ایمیل</label>
            <input id="email" type="email" placeholder="ایمیل خود را وارد نمایید."
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" />
        </div>

        <div>
            <label for="message" class="block text-gray-700 mb-1">متن پیام</label>
            <textarea id="message" rows="4" placeholder="متن مورد نظر را وارد نمایید."
                class="w-full border border-gray-300 rounded-md px-3 py-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-400 text-gray-200 py-2 rounded-md hover:bg-blue-500">
            ارسال پیام
        </button>
    </form>

</body>

</html>
<?php get_footer() ?>