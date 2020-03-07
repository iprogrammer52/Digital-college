@extends('layouts.app')

@section('content')
<div class="container mt-4 align-items-center">
    <div class="card mb-3">
        <div class="card-body">
            <form action="{{route('create_news.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image_news" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                </div>
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
                    <input id="add" class="form-control btn btn-dark" type="submit" name="add" value="выложить">
                </div>
            </form>
        </div>
    </div>    
</div>
@endsection