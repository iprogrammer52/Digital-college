@extends('layouts.app')

@section('content')
<form method="POST" action="{{asset('submit_documents.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">{{__('app.name')}}</label>
        <input id="name" class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label for="surname">{{__('surname')}}</label>
        <input id="surname" class="form-control" type="text" name="surname">
    </div>
    <div class="form-group">
        <label for="my-select">Время приема</label>
        <select id="my-select" class="form-control" name="" @if(empty($receptionTime['items'])) disabled @endif>
            @foreach ($receptionTime as $time)
                <option value="{{$time->time}}">{{$time->time}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-dark">отправить</button>
</form>
@endsection
