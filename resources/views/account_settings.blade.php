@extends('layouts.app')

@section('content')
<form action="{{route('settings.update', Auth::user()->id)}}" enctype="multipart/form-data" method="POST">
    @method('PUT')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Name">{{__('app.name')}}</label>
            <input id="Name" class="form-control" name="name" value="{{Auth::user()->name}}" type="text">
        </div>
        <div class="form-group col-md-6">
            <label for="Surname">{{__('app.surname')}}</label>
            <input id="Surname" class="form-control" name="surname" type="text" value="{{Auth::user()->surname}}">
        </div>
    </div>
    <div class="form-group">
        <label for="middlename">{{__('app.middlename')}}</label>
        <input id="middlename" class="form-control" type="text" name="middlename" value="{{Auth::user()->middlename}}">
    </div>
    <div class="form-group">
        <label for="inputEmail4">{{__('email')}}</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{Auth::user()->email}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="password">{{__('app.new_password')}}</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group col-md-6">
            <label for="repassword">{{__('app.confirm_password')}}</label>
            <input type="password" name="repassword" class="form-control" id="repassword">
        </div>
    </div>
    @component('components.imageuploader')
    @endcomponent
    <br>
    <div class="form-group">
        <input class="btn btn-dark" type="submit" value="{{__('save')}}">
    </div>
</form>
@endsection