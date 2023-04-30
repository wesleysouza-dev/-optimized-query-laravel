<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - Listagem</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- @vite('resources/js/app.js') -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased bg-gray-100">
        <div class="relative flex-col sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white max-w-screen-lg mx-auto my-5">
            <livewire:posts/> 
        </div>

        @livewireScripts

        <script>
  
</script>
    </body>
</html>
