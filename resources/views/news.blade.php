@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$news->title}}</h5>
            <p class="card-text">
                {{$news->body}}
            </p>
            @if (!empty($news->images))
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @for($i = 0; $i < count($news->images); $i++)
                            <div class="carousel-item @if($i == 0) active @endif">
                                <img src="{{ asset('/storage/' . $news->images[$i]) }}" class="d-block w-100 m-0 p-0">
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
            <br />
            <p class="card-text text-muted text-right">
                - {{$news->created_at}}
            </p>
        </div>
    </div>
@endsection