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
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="p-5 border-b border-gray-200 dark:border-gray-700  bg-zinc-900 text-white p-5">
        <nav class="mb-5">
            <ul class="font-semibold">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/store') }}">Store</a></li>
            </ul>
        </nav>
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">
                Devstagram
            </h1>
        </div>

        <nav>
            <a class="font-bold uppercase text-gray-300 text-sm" href="{{ url('/login') }}">Login</a>
            <a class="font-bold uppercase text-gray-300 text-sm" href="{{ url('/register') }}">Register</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    
    <hr>

    <footer>
        <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>

</body>
</html>