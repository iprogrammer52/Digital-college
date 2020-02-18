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
                <li class="cm-list__cm-item">
                    <a href="#" class="cm-link">
                        {{__('app.about_us')}}
                    </a>
                </li>
                <li class="cm-list__cm-item cm-list__cm-item--mobile">
                    <svg 
                        class="cm-svg-image"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                    >
                        <path 
                            d="M0 0h24v24H0V0z" 
                            fill="none"
                        />
                        <path 
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"
                        />
                    </svg>
                </li>
                <li class="cm-list__cm-item cm-list__cm-item--mobile">
                    <svg
                        class="cm-svg-image" 
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        >
                            <path 
                                d="M0 0h24v24H0V0z" 
                                fill="none"
                            />
                            <path 
                                d="M19 18l2 1V3c0-1.1-.9-2-2-2H8.99C7.89 1 7 1.9 7 3h10c1.1 0 2 .9 2 2v13zM15 5H5c-1.1 0-2 .9-2 2v16l7-3 7 3V7c0-1.1-.9-2-2-2z"
                            />
                    </svg>
                </li>
                <li class="cm-list__cm-item cm-list__cm-item--mobile">
                    <svg
                        class="cm-svg-image" 
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        >
                            <path 
                                d="M0 0h24v24H0V0z" 
                                fill="none"
                            />
                            <path 
                                d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                            />
                    </svg>
                </li>
                <li class="cm-list__cm-item cm-list__cm-item--mobile">
                    <svg
                        class="cm-svg-image" 
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        >
                            <path 
                                d="M0 0h24v24H0V0z" 
                                fill="none"
                            />
                            <path 
                                d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z"
                            />
                        </svg>    
                </li>
            </ul>
		</nav>
    </header>
    <main class="cm-content">
        @yield('content')
    </main>

    <footer class="cm-footer">
        <p class="cm-text cm-text--light">
            &copy Разработчик <a class="cm-link" href="https://vk.com/programmerivan" target="_blank">Иван Балашов</a>
        </p>
    </footer>
</body>
    <!-- Scripts -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    >
    </script>
</html>
