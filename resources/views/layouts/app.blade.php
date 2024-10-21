<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @Vite('resources/css/app.css')
    @Vite('resources/js/app.js')
</head>

<body class="font-sans antialiased dark:text-white/50">
    <header class="p-5 border-b border-gray-200 dark:border-gray-700 dark:bg-black  text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">
                Devstagram
            </h1>

            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ url('/login') }}">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ url('/register') }}">Register</a>
            </nav>
            
        </div>
    </header>

    <main class="container mx-auto mt-10"> 
        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
        @yield('content')
    </main>

    <hr>

    <footer class="text-center p-5 text-gray-400 font-bold uppercase">
        <p>&copy; {{ date('Y') }} Devstagram - All rights reserved.</p>
    </footer>

</body>
</html>