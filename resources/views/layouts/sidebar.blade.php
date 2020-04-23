<hr class="p-0 m-0 bg-dark d-none d-md-block">
<div class="cm-wrapper-sidebar">
    <div class="cm-wrapper-sidebar__profile-info">
        <img
            class="cm-wrapper-sidebar__profile-image"
            src="{{ !empty(Auth::user()->avatar) ? asset('/storage/' . Auth::user()->avatar) : asset('/images/default-avatar.png') }}"
            alt="{{ __('app.avatar') }}"
        >
        <div class="cm-wrapper-sidebar__profile-text cm-wrapper-sidebar__profile-text--column">
            <p class="text-light">{{ Auth::user()->surname }} {{ Auth::user()->name }}</p>
            <p class="text-muted">{{ Auth::user()->usergroup }}</p>
        </div>
    </div>
    <hr class="p-0 m-0 bg-dark">
    <ul class="cm-wrapper-sidebar__menu cm-sidebar-menu">
        <li class="cm-sidebar-menu__item">
            <div class="accordion" id="accordionGeneral">
                <div class="card rounded-0 bg-dark text-light border-0">
                    <div class="card-header" id="headingGeneral">
                        <h2 class="mb-0">
                            <button
                                class="btn btn-link text-light"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseGeneral"
                                aria-expanded="false"
                                aria-controls="collapseGeneral"
                            >
                                {{ __('app.general') }}
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapseGeneral"
                        class="collapse"
                        aria-labelledby="headingGeneral"
                        data-parent="#accordionGeneral"
                    >
                        <ul class="list-group list-group-flush text-light">
                            <li class="list-group-item bg-dark">
                                <a href="{{ asset('home') }}" class="card-link text-light pl-4">
                                    {{ __('app.lents') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="cm-sidebar-menu__item">
            <div class="accordion" id="accordionManagement">
                <div class="card rounded-0 bg-dark text-light border-0">
                    <div class="card-header" id="headingManagement">
                        <h2 class="mb-0">
                            <button
                                class="btn btn-link text-light"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseManagement"
                                aria-expanded="false"
                                aria-controls="collapseManagement"
                            >
                                {{ __('app.management') }}
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapseManagement"
                        class="collapse"
                        aria-labelledby="headingManagement"
                        data-parent="#accordionManagement"
                    >
                        <ul class="list-group list-group-flush text-light">
                            <li class="list-group-item bg-dark">
                                <a href="{{asset('add_news')}}" class="card-link text-light pl-4">
                                    {{ __('app.add_news') }}
                                </a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a href="{{asset('user_settings')}}" class="card-link text-light pl-4">
                                    {{ __('app.users') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="cm-sidebar-menu__item">
            <div class="accordion" id="accordionCreateNotifications">
                <div class="card rounded-0 bg-dark text-light border-0">
                    <div class="card-header" id="headingCreateNotifications">
                        <h2 class="mb-0">
                            <button
                                class="btn btn-link text-light"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseCreateNotifications"
                                aria-expanded="false"
                                aria-controls="collapseCreateNotifications"
                            >
                                {{ __('app.create_notifications') }}
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapseCreateNotifications"
                        class="collapse"
                        aria-labelledby="headingCreateNotifications"
                        data-parent="#accordionCreateNotifications"
                    >
                        <ul class="list-group list-group-flush text-light">
                            <li class="list-group-item bg-dark">
                                <a href="{{ asset('mailing') }}" class="card-link text-light pl-4">
                                    {{ __('app.add_mailing') }}
                                </a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a href="{{ asset('notify') }}" class="card-link text-light pl-4">
                                    {{ __('app.notify') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="cm-sidebar-menu__item">
            <div class="accordion" id="accordionAdmissionCampaign">
                <div class="card rounded-0 bg-dark text-light border-0">
                    <div class="card-header" id="headingAdmissionCampaign">
                        <h2 class="mb-0">
                            <button
                                class="btn btn-link text-light"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseAdmissionCampaign"
                                aria-expanded="false"
                                aria-controls="collapseAdmissionCampaign"
                            >
                                {{ __('app.admission_campaign') }}
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapseAdmissionCampaign"
                        class="collapse"
                        aria-labelledby="headingAdmissionCampaign"
                        data-parent="#accordionAdmissionCampaign"
                    >
                        <ul class="list-group list-group-flush text-light">
                            <li class="list-group-item bg-dark">
                                <a href="{{ asset('reception_time') }}" class="card-link text-light pl-4">
                                    {{ __('app.reception_time') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="cm-sidebar-menu__item">
            <div class="accordion" id="accordionExtra">
                <div class="card rounded-0 bg-dark text-light border-0">
                    <div class="card-header" id="headingExtra">
                        <h2 class="mb-0">
                            <button
                                class="btn btn-link text-light"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseExtra"
                                aria-expanded="false"
                                aria-controls="collapseExtra"
                            >
                                {{ __('app.extra') }}
                            </button>
                        </h2>
                    </div>
                    <div
                        id="collapseExtra"
                        class="collapse"
                        aria-labelledby="headingExtra"
                        data-parent="#accordionExtra"
                    >
                        <ul class="list-group list-group-flush text-light">
                            <li class="list-group-item bg-dark">
                                <a href="{{ asset('profile') }}" class="card-link text-light pl-4">
                                    {{ __('app.profile') }}
                                </a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="card-link text-light pl-4" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        </li>
    </ul>
</div>
