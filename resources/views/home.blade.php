@extends('layouts.app')

@section('content')
    <div>
        @foreach ($news as $item)
                @component('components.card')
                    @slot('image')
                        {{$item['image_news']}}                
                    @endslot
                    @slot('title')
                        {{$item['title_news']}}
                    @endslot
                    @slot('body')
                        {{$item['body_news']}}
                    @endslot
                    @slot('date')
                        {{$item['created_at']}}                        
                    @endslot
                @endcomponent
            @endforeach
        </div>
    </div>
@endsection