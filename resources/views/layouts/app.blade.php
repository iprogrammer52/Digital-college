<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kdc</title>
    <link rel="manifest" href="{{ asset('kdc.webmanifest') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark @auth bg-dark @else bg-primary @endauth cm-navbar">
        <div class="navbar-expand w-100" id="navbarNav">
            <ul class="navbar-nav justify-content-around justify-content-md-end">
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
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('login') }}">
                            <img src="{{ asset('icons/login.svg') }}" alt="{{ __('app.login') }}">
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('index') }}">
                            <img src="{{ asset('icons/newspaper.svg') }}" alt="{{ __('app.news') }}">
                        </a>
                    </li>
                @else
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('icons/timetable.svg') }}" alt="{{ __('app.') }}">
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a id="cm-js-open-menu" class="nav-link" href="#">
                            <img src="{{ asset('icons/menu.svg') }}" alt="{{ __('app.menu') }}">
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a id="cm-js-open-notifications" class="nav-link" href="#">
                            <img src="{{ asset('icons/notifications.svg') }}" alt="{{ __('app.notifications') }}">
                        </a>
                    </li>
                @endguest
                <li class="nav-item dropdown d-lg-block d-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('app.' . App::getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{asset('change_locale/ru')}}">ru</a>
                        <a class="dropdown-item" href="{{asset('change_locale/en')}}">en</a>
                        <a class="dropdown-item" href="{{asset('change_locale/ar')}}">ar</a>
                    </div>
                </li>
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
                <div class="col-md-2 col-sm-12 d-lg-block d-none mt-4" id="notifications_data">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Добавлено в релизе</h5>
                            <ul>
                                <li>Иконки меню</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 m-0 p-0">
                    <main class="m-0 p-0 mt-4 container-fluid">
                        @yield('content')
                    </main>
                </div>
            @endauth
        </div>
    </div>
    <footer class="bg-light cm-footer">
        &copy;  2014–2020 Колледж экономики и информатики им. А.Н. Афанасьева | Все права защищены
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
