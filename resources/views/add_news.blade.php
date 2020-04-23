@extends('layouts.app')

@section('content')
    <form action="{{ route('add_news.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @component('components.imageuploader')
        @endcomponent
        <div class="form-group">
            <label for="title">{{ __('app.title') }}</label>
            <input id="title" class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="body">{{ __('app.text_news') }}</label>
            <textarea class="form-control" id="text" name="body" rows="3"></textarea>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Для всех</label>
        </div>
        @component ('components/cm-toggle-button') @endcomponent
        {{-- <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="for_all" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Для всех
            </label>
        </div> --}}
        <div class="form-group d-flex justify-content-end">
            <input id="add" class="btn btn-dark" type="submit" name="add" value="выложить">
        </div>
    </form>
@endsection