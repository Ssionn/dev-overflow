<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>

    <body class="bg-[#151718] min-h-screen w-full">

        <header class="flex items-center bg-[#222526] h-14">
            @include('components.forum.navigation')
        </header>

        <main class="container w-full pl-8 pr-8 mx-auto mt-12 sm:max-w-7xl lg:pl-12 lg:pr-12">
            {{ $slot }}
        </main>

        <div class="py-12">
        </div>

        <footer class="relative py-8 mt-12 text-gray-400">
            @include('components.forum.footer')
        </footer>
    </body>
</html>
