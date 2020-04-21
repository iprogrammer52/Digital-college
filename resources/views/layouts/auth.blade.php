@extends('layouts.app')

@section('content')
<div class="container-fluid justify-content-center col-md-6 col-lg-4 animated jackInTheBox">
    <div class="card shadow d-none d-md-block">
        <div class="card-body">
            @yield('auth_form')
        </div>
    </div>
    <div class="d-sm-block d-md-none">
        @yield('auth_form')
    </div>
</div>
@endsection
