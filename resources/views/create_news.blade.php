@extends('layouts.app')

@section('content')
<div class="container mt-4 align-items-center">
    <div class="card mb-3">
            @component('fileuploader')@endcomponent
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="name">Название новости</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="text">Текст новости</label>
                    <textarea class="form-control" id="text" rows="3"></textarea>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
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