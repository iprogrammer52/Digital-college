@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <form 
            action="{{route('profile.update', Auth::user()->id)}}" 
            enctype="multipart/form-data" 
            method="POST"
        >
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">{{__('app.name')}}</label>
                    <input 
                        id="name" 
                        class="form-control" 
                        name="name" 
                        value="{{Auth::user()->name}}" 
                        type="text"
                    >
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">{{__('app.surname')}}</label>
                    <input
                        id="surname"
                        class="form-control"
                        name="surname"
                        type="text"
                        value="{{Auth::user()->surname}}"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="middlename">{{__('app.middlename')}}</label>
                <input 
                    id="middlename" 
                    class="form-control" 
                    name="middlename" 
                    value="{{Auth::user()->middlename}}"
                    type="text" 
                >
            </div>
            <div class="form-group">
                <label for="inputEmail4">{{__('email')}}</label>
                <input 
                    id="inputEmail4" 
                    class="form-control" 
                    name="email" 
                    value="{{Auth::user()->email}}"
                    type="email" 
                    >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">{{__('app.new_password')}}</label>
                    <input 
                        id="password" 
                        class="form-control" 
                        name="password"
                        type="password" 
                    >
                </div>
                <div class="form-group col-md-6">
                    <label for="repassword">{{__('app.confirm_password')}}</label>
                    <input 
                        id="repassword"
                        class="form-control" 
                        name="repassword" 
                        type="password" 
                    >
                </div>
            </div>
            @component('components.imageuploader')
            @endcomponent
            <br>
            <div class="form-group">
                <input 
                    class="btn btn-dark" 
                    value="{{__('app.save')}}"
                    type="submit" 
                >
            </div>
    </form>
    </div>
</div>
@endsection