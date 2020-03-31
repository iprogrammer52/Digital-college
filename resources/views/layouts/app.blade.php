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
                    <a 
                        href="{{ asset('about_us') }}" 
                        class="nav-link"
                    >
                        {{ __('app.about_us') }}
                    </a>
                </li>
                @guest                    
                    <li class="nav-item">
                        <a 
                            href="{{ asset('abiturient_info') }}" 
                            class="nav-link"
                        >
                            {{ __('app.for_abiturient') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="{{ route('login') }}"
                        >
                            {{ __('app.login') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="{{ route('register') }}"
                        >
                            {{ __('app.register') }}
                        </a>
                    </li>
                @else
                    <li class="nav-item d-md-none">
                        <a 
                            id="cm-js-open-menu" 
                            class="nav-link" 
                            href="#"
                        >
                            {{ __('app.menu') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            href="#" 
                            class="nav-link"
                        >
                            {{ __('app.notifications') }}
                            <span class="badge badge-pill badge-light ml-1">
                                0
                            </span>
                        </a>                        
                    </li>
                @endguest
            </ul>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            @auth
                <div class="col-2 m-0 p-0 bg-light d-none d-sm-block">
                    @component('layouts/sidebar') @endcomponent
                </div>
                <div class="col-md-8 col-sm-12 m-0 p-0">
                    <main class="mt-4 container-fluid">
                        @yield('content')
                    </main>
                </div>
                <div class="col-2 d-none d-sm-block mt-4">
                    <div class="card text-white shadow-sm bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Primary card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Secondary card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Success card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Danger card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Warning card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Info card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Light card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card text-white shadow-sm bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Dark card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
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