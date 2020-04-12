@extends('layouts.app')

@section('content')
<div class="container-fluid justify-content-center col-md-6 col-lg-4 animated jackInTheBox">
    <div class="card shadow">
        <div class="card-body">
            @yield('auth_form')
        </div>
    </div>
</div>
@endsection
