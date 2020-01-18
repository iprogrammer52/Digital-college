<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
</head>
<body>
    <header class="cm-header">
        <nav class="cm-menu cm-header__menu">
            <ul class="cm-list cm-menu__list--horizontal">
                <li class="cm-item">
                    <a href="" class="cm-link">
                        about as
                    </a>
                </li>
                <li class="item">
                    <a href="" class="link">
                        background
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="content">
        @yield('content')
    </main>
</body>
    <!-- Scripts -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    >
    </script>
</html>
