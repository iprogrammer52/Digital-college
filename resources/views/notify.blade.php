@extends('layouts.app')

@section('content')
<form action="{{asset('notify')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="usergroup">{{__('app.recipients')}}</label>
        <select class="form-control" name="usergroup">
            <option selected>{{__('app.all')}}</option>
            <option>{{__('app.students')}}</option>
            <option>{{__('app.teachers')}}</option>
            <option>{{__('app.administration')}}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="type">{{__('app.notification_type')}}</label>
        <select id="type" class="form-control" name="">
            <option selected>{{__('app.normal')}}</option>
            <option>{{__('app.important')}}</option>
            <option>{{__('app.warning')}}</option>
        </select>
    </div>
    <div class="form-group">
        <textarea id="message" class="form-control" name="" rows="3" placeholder="{{__('app.text_mailing')}}"></textarea>
    </div>
    <div class="form-group d-flex justify-content-end mt-4">
        <button type="submit" class="btn btn-dark">{{__('app.send')}}</button>
    </div>
</form>
@endsection