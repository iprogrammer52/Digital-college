<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="cm-header">
        <nav class="navbar navbar-expand justify-content-center justify-content-md-end navbar-dark bg-dark">
            <div class="navbar-expand" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item d-md-none">
                        <a id="cm-js-open-menu" class="nav-link" href="#">menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('about_us')}}" class="nav-link">{{__('app.about_us')}}</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a href="#" class="nav-link">Уведомления <span class="badge badge-pill badge-light">0</span></a>                        
                    </li>
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
                <main class="container mt-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>