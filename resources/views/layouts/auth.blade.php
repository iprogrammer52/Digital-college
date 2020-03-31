@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-lg-9">
        </div>
        <div class="col-md-8 col-lg-9 d-sm-block d-none">
            <h1>KEI</h1>
        </div>
        <div class="col-md-4 col-lg-3">
                @yield('auth_form')
        </div>
    </div>
</div>
@endsection
