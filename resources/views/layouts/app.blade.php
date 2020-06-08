<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Колледж экономики и информатики</title>
    {{-- <link rel="manifest" href="{{ asset('kdc.webmanifest') }}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('images/logo_ulgtu.jpg')}}"  type="image/x-icon">
</head>
<body>
    <header class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark @auth bg-dark @else cm-background-color-gradient @endauth cm-navbar">
        @if(!isset(Auth::user()->id))
            <a class="navbar-brand d-lg-block d-none" href="/">
                KEI
            </a>
        @endif
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
                        <img src="{{ asset('icons/language.svg') }}" alt="{{ __('app.' . App::getLocale()) }}">
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
                    @if(session('alert'))
                        @component('components.alert')
                            @slot('type')
                                {{session('alert')['type']}}
                            @endslot
                            @slot('text')
                                {{session('alert')['text']}}
                            @endslot
                        @endcomponent
                    @endif
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
    @if (!isset(Auth::user()->id))
    <hr>
        <footer class="bg-light text-dark cm-footer container-fluid">
            <div class="row p-4">
                <div class="col-lg-4 col-md-12">
                    <h5>Контакты</h5>
                    <p>
                        432063, г. Ульяновск <br>
                        ул.Энгельса, 3 <br>
                        (учебный корпус № 1) <br>
                        каб. 119, тел.(8422) 77-88-14 <br>
                        kei@ido.ulstu.ru <br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h5>Режим работы</h5>
                    <p>
                        Понедельник-Четверг <br>
                        с 8:30 до 17:22 <br>
                        Пятница с 8:30 до 16:22 <br>
                        Обед с 13:00 до 13:40 <br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h5>Соц.сети</h5>
                    <p>
                        ВК <br>
                        instagram <br>
                    </p>
                </div>
            </div>
            <hr>
            &copy;  2014–2020 Колледж экономики и информатики им. А.Н. Афанасьева | Все права защищены
        </footer>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
