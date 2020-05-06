@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$news->title}}</h5>
            <p class="card-text">
                {{$news->body}}
            </p>
        </div>
    </div>
@endsection