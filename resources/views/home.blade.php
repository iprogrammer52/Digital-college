@extends('layouts.app')

@section('content')
        @foreach ($news as $item)
            @component('components.card')
                @slot('id')
                    {{$item['id']}}
                @endslot
                @slot('image')
                    {{$item['image']}}                
                @endslot
                @slot('title')
                    {{$item['title']}}
                @endslot
                @slot('body')
                    {{$item['body']}}
                @endslot
                @slot('date')
                    {{$item['created_at']}}                        
                @endslot
            @endcomponent
        @endforeach
@endsection