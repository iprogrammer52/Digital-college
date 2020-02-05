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
    <header class="cm-navbar">
    	<nav class="cm-menu">
            <ul class="cm-list cm-list--horizontal cm-menu__cm-list">
                <li class="cm-item">
                    <a href="" class="cm-link">
                        {{__('app.about_us')}}        
                    </a>
                </li>
                <li class="cm-item">
                    <a href="" class="cm-link">
                        {{__('app.price')}}        
                    </a>
                </li>
                <li class="cm-item">
                    <a href="" class="cm-link">
                        {{__('app.news')}}        
                    </a>
                </li>
                <li class="cm-item">
                    <a href="" class="cm-link">
                        {{__('app.docs')}}        
                    </a>
                </li>
            </ul>
		</nav>
    </header>
    <main class="cm-content">
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
