@extends('layouts.app')

@section('content')
<div class="row m-4">
    <div class="col">
        <h5>
            Ждем тебя в свою команду
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quaerat consequatur, expedita perferendis laborum illo. Quia odio laboriosam error officiis, consectetur a quam est praesentium, voluptas minus omnis. Delectus, harum.
        </p>
        <img src="{{asset('images/welcome_in_teams.jpg')}}" alt="" style="height: 450px;">
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Записаться на подачу документов</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <input
                            id="surname"
                            class="form-control
                                @error('surname')
                                    is-invalid
                                @enderror"
                            name="surname"
                            type="text"
                            value="{{ old('surname') }}"
                            autocomplete="surname"
                            placeholder="{{ __('app.surname') }}"
                            required
                            autofocus
                        >
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input
                            id="name"
                            class="form-control
                                @error('name')
                                    is-invalid
                                @enderror"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            autocomplete="name"
                            placeholder="{{ __('app.name') }}"
                            required
                            autofocus
                        >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input
                            id="email"
                            class="form-control
                                @error('email')
                                    is-invalid
                                @enderror"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            placeholder="{{ __('app.email') }}"
                            required
                            autofocus
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input
                            id="password"
                            class="form-control
                                @error('password')
                                    is-invalid
                                @enderror"
                            name="password"
                            type="password"
                            value="{{ old('password') }}"
                            autocomplete="password"
                            placeholder="{{ __('app.password') }}"
                            required
                            autofocus
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input
                            id="confirm_password"
                            class="form-control
                                @error('confirm_password')
                                    is-invalid
                                @enderror"
                            name="password_confirmation"
                            type="password"
                            value="{{ old('confirm_password') }}"
                            autocomplete="confirm_password"
                            placeholder="{{ __('app.confirm_password') }}"
                            required
                            autofocus
                        >
                        @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <hr class="hr">
                    <div class="form-group">
                        <label for="my-select">Выбирите время</label>
                        <select id="my-select" class="form-control" name="">
                            <option>Text</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">
                            {{ __('app.send') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
