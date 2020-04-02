<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KDC</title>
    <link type="manifest" href="{{ asset('manifest.json') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
    <header class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark bg-dark">
        <div class="navbar-expand" id="navbarNav">
            <ul class="navbar-nav">
                {{--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('app.' . App::getLocale())}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="en">{{__('app.en')}}</a>
                        <a class="dropdown-item" href="ru">{{__('app.ru')}}</a>
                        <a class="dropdown-item" href="ar">{{__('app.ar')}}</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ asset('about_us') }}" class="nav-link">
                        {{ __('app.about_us') }}
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a href="{{ asset('abiturient_info') }}" class="nav-link">
                            {{ __('app.for_abiturient') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ __('app.login') }}
                        </a>
                    </li>
                {{--
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                            {{ __('app.register') }}
                        </a>
                </li> --}} 
                @else
                    <li class="nav-item d-md-none">
                        <a id="cm-js-open-menu" class="nav-link" href="#">
                            {{ __('app.menu') }}
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-sm-center">
            @auth
                <div class="col-2 p-0 m-0 bg-light d-lg-block d-none">
                    @component('layouts/sidebar') @endcomponent
                </div>
                <div class="col-md-8 col-sm-12 m-0 p-0">
                    <main class="mt-4 container-fluid">
                        @yield('content')
                    </main>
                </div>
                <div class="col-2 d-lg-block d-none mt-4">
                    <div class="alert alert-dark fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    </div>
                    <div class="alert alert-dark fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    </div>
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
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>