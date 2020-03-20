@extends('layouts.app')

@section('content')
    <form action="{{route('create_news.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        @component('components.imageuploader')
        @endcomponent
        <div class="form-group">
            <label for="title_news">Название новости</label>
            <input id="title_news" class="form-control" type="text" name="title_news">
        </div>
        <div class="form-group">
            <label for="body_news">Текст новости</label>
            <textarea class="form-control" id="text" name="body_news" rows="3"></textarea>
        </div>
        <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="for_all" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Для всех
            </label>
        </div>
        <div class="form-group">
            <input id="add" class="btn btn-dark" type="submit" name="add" value="выложить">
        </div>
    </form>
@endsection