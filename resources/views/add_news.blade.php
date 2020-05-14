@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('add_news.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">{{ __('app.title') }}</label>
                    <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">{{ __('app.text_news') }}</label>
                    <textarea class="form-control" id="text" name="body" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>{{ __('app.uploading_images') }}</label>
                    @component('components/imageuploader')@endcomponent
                </div>
                <div class="form-group d-flex justify-content-end">
                    <input id="add" class="btn btn-dark" type="submit" name="add" value="{{ __('app.publish') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
