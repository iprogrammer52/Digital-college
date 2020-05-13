@extends('layouts.auth')

@section('auth_form')
    <h2 class="title mb-4">{{ strtoupper(__('app.login')) }}</h2>
    <form
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf
        <div class="form-group">
            <input
                id="email"
                class="form-control
                    @error('email')
                        is-invalid
                    @enderror"
                type="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="email"
                placeholder="{{ __('app.email') }}"
                autofocus
                required
            >
            @error('email')
                <span
                    class="invalid-feedback"
                    role="alert"
                >
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
                type="password"
                name="password"
                autocomplete="current-password"
                placeholder="{{ __('app.password') }}"
                required

            >
            @error('password')
                <span
                    class="invalid-feedback"
                    role="alert"
                >
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-check">
                <input
                    id="remember"
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label
                    class="form-check-label"
                    for="remember"
                >
                    {{ __('app.remember_me') }}
                </label>
            </div>
        </div>
        <div class="form-group mb-0 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                {{ __('app.login') }}
            </button>
        </div>
    </form>
@endsection
