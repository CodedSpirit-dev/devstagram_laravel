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
    <header>
        <nav>
            <ul class="font-semibold">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/store') }}">Store</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    
    <hr>

    <footer>
        <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>