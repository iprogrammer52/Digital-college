<div class="page-wrapper chiller-theme toggled cm-sidebar">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
        <div class="sidebar-header">
            <div class="user-pic">
            @if(!empty(Auth::user()->avatar))
                <img
                    class="img-responsive img-rounded" 
                    src="{{asset(Auth::user()->avatar)}}"
                    alt="User picture"
                >
            @else
                <img
                    class="img-responsive img-rounded" 
                    src="{{asset("images/avatar/default.jpg")}}"
                    alt="User picture"
                >
            @endif
            </div>
            <div class="user-info">
                <span class="user-name">
                    {{Auth::user()->name}}  {{Auth::user()->surname}}
                </span>
                <span class="user-name">
                    {{Auth::user()->middlename}}
                </span>
                <span class="user-role">
                    {{Auth::user()->role}}
                </span>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
            <li class="header-menu">
                <span>{{__('app.general')}}</span>
            </li>
            <li>
                <a href="{{asset('home')}}">
                <i class="fa fa-folder"></i>
                <span>{{__('app.lents')}}</span>
                </a>
            </li>
            {{-- <li class="sidebar-dropdown">
                <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>Dashboard</span>
                <span class="badge badge-pill badge-warning">New</span>
                </a>
                <div class="sidebar-submenu">
                <ul>
                    <li>
                        <a href="#">Dashboard 1
                            <span class="badge badge-pill badge-success">Pro</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">Dashboard 2</a>
                    </li>
                    <li>
                        <a href="#">Dashboard 3</a>
                    </li>
                </ul>
                </div>
            </li> --}}
            {{-- <li class="header-menu">
                <span>Учеба</span>
            </li> --}}
            {{-- <li>
                <a href="{{asset('home')}}">
                <i class="fa fa-folder"></i>
                <span>Расписание</span>
                </a>
            </li> --}}
            @if(Auth::user()->role == "root")
                <li class="header-menu">
                    <span>
                        {{__('app.management')}}
                    </span>
                </li>
                <li>
                    <a href="{{asset('create_news')}}">
                    <i class="fa fa-folder"></i>
                    <span>{{__('app.add_news')}}</span>
                    <span class="badge badge-pill badge-warning">{{__('app.new')}}</span>    
                </a>
                </li>
                <li>
                    <a href="{{asset('user_settings')}}">
                    <i class="fa fa-folder"></i>
                    <span>{{__('app.users')}}</span>
                    <span class="badge badge-pill badge-warning">{{__('app.new')}}</span>    
                </a>
                </li>
                <li>
                    <a href="{{asset('mailing')}}">
                    <i class="fa fa-folder"></i>
                    <span>{{__('app.add_mailing')}}</span>
                    <span class="badge badge-pill badge-danger">403</span>    
                </a>
                </li>
            @endif
            <li class="header-menu">
                <span>{{__('app.extra')}}</span>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>{{__('app.settings')}}</span>
                <span class="badge badge-pill badge-warning">{{__('app.new')}}</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{asset('settings')}}">
                                {{__('app.profile')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a  
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                    {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</div>
