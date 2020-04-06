<div class="card bg-dark text-white mt-4">
    <img src="{{asset('/storage/' . Auth::user()->avatar)}}" class="card-img" alt="...">
    <div class="card-img-overlay">
        <p class="card-text">{{Auth::user()->surname}} <br> {{Auth::user()->name}} {{Auth::user()->middlename}}</p>
        <p class="card-text text-muted">{{Auth::user()->role}}</p>
    </div>
</div>

<div class="accordion mt-2" id="generalAccordion">
    <div class="card bg-dark text-light">
        <div class="card-header" id="generalHeading">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#generalCollapse" aria-expanded="true" aria-controls="generalCollapse">
                    {{__('app.general')}}
                </button>
            </h2>
        </div>
        <div id="generalCollapse" class="collapse show" aria-labelledby="generalHeading" data-parent="#generalAccordion">
            <ul class="list-group list-group-flush bg-dark text-light">
                <li class="list-group-item bg-dark">
                    <a href="{{asset('home')}}" class="card-link text-light">
                        {{__('app.lents')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@if(Auth::user()->role == "root")
<div class="accordion mt-2" id="managementAccordion">
    <div class="card bg-dark text-light">
        <div class="card-header" id="managementHeading">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#managementCollapse" aria-expanded="false">
                    {{__('app.management')}}
                </button>
            </h2>
        </div>
        <div id="managementCollapse" class="collapse" aria-labelledby="managementHeading" data-parent="#managementAccordion">
            <ul class="list-group list-group-flush bg-dark text-light">
                <li class="list-group-item bg-dark">
                    <a href="{{asset('create_news')}}" class="card-link text-light">
                        {{__('app.add_news')}}
                    </a>
                </li>
                <li class="list-group-item bg-dark">
                    <a href="{{asset('user_settings')}}" class="card-link text-light">
                        {{__('app.users')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="accordion mt-2" id="createNotificationsAccordion">
    <div class="card bg-dark text-light">
        <div class="card-header" id="createNotificationsHeading">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#createNotificationsCollapse" aria-expanded="false">
                    {{__('app.create_notifications')}}
                </button>
            </h2>
        </div>
        <div id="createNotificationsCollapse" class="collapse" aria-labelledby="createNotificationsHeading" data-parent="#createNotificationsAccordion">
            <ul class="list-group list-group-flush bg-dark text-light">
                <li class="list-group-item bg-dark">
                    <a href="{{asset('mailing')}}" class="card-link text-light">
                        {{__('app.add_mailing')}}
                    </a>
                </li>
                <li class="list-group-item bg-dark">
                    <a href="{{asset('notify')}}" class="card-link text-light">
                        {{__('app.notify')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

<div class="accordion mt-2" id="extraAccordion">
    <div class="card bg-dark text-light">
        <div class="card-header" id="extraHeading">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#extraCollapse" aria-expanded="false">
                    {{__('app.extra')}}
                </button>
            </h2>
        </div>
        <div id="extraCollapse" class="collapse" aria-labelledby="extraHeading" data-parent="#extraAccordion">
            <ul class="list-group list-group-flush bg-dark text-light">
                <li class="list-group-item bg-dark">
                    <a href="{{asset('settings')}}" class="card-link text-light">
                        {{__('app.profile')}}
                    </a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="card-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('app.logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>