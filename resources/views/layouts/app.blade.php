<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kdc</title>
    <link type="manifest" href="{{ asset('manifest.json') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark bg-dark cm-navbar">
        <div class="navbar-expand" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item d-lg-block d-none">
                    <a href="{{ asset('about_us') }}" class="nav-link">
                        {{ __('app.about_us') }}
                    </a>
                </li>
                @guest
                    <li class="nav-item d-lg-block d-none">
                        <a href="{{ asset('abiturient_info') }}" class="nav-link">
                            {{ __('app.for_abiturient') }}
                        </a>
                    </li>
                    <li class="nav-item d-lg-block d-none">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ __('app.login') }}
                        </a>
                    </li>
                    <li class="nav-item d-lg-block d-none">
                        <a class="nav-link" href="{{ route('register') }}">
                            {{ __('app.register') }}
                        </a>
                    </li>
                @else
                    <li class="nav-item d-md-none">
                        <a id="cm-js-open-menu" class="nav-link" href="#">
                            <img src="{{ asset('icons/menu.svg') }}" class="" alt="{{ __('app.menu') }}">
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-sm-center">
            @auth
                <div class="col-2 p-0 m-0 d-lg-block d-none" id="sidebar">
                    @component ('layouts/sidebar') @endcomponent
                </div>
                <div class="col-md-8 col-sm-12 m-0 p-0">
                    <main class="mt-4 container-fluid">
                        @yield('content')
                    </main>
                </div>
                <div class="col-2 d-lg-block d-none mt-4" id="notifications_data">
                </div>
            @else
                <div class="col-12">
                    <main class="mt-4 container-fluid">
                        @yield('content')
                    </main>
                </div>
            @endauth
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
