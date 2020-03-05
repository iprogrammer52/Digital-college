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
    <header>
        <nav class="navbar navbar-expand justify-content-center navbar-dark bg-dark">
            <div class="navbar-expand" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="cm-js-open-menu" class="nav-link" href="#">menu</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endguest
                </ul>
            </div>
            </nav>
            @auth
                @component ('layouts.sidebar') @endcomponent
            @endauth
    </header>
    <main class="py-4">
        @yield('content')
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>