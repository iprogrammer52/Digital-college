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
<body>
    <header class="cm-header">
        <nav class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark bg-dark">
            <div class="navbar-expand" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item dropdown">
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
                        <a href="{{asset('about_us')}}" class="nav-link">{{__('app.about_us')}}</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('app.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('app.register') }}</a>
                        </li>
                    @else
                        <li class="nav-item d-md-none">
                            <a id="cm-js-open-menu" class="nav-link" href="#">{{__('app.menu')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">{{__('app.notifications')}}<span class="badge badge-pill badge-light ml-1">0</span></a>                        
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div>
                @auth
                    @component ('layouts.sidebar') @endcomponent
                @endauth
            </div>
            <div class="col">
                <main class="mt-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>