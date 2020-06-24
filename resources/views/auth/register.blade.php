@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="bg-white py-3 px-4 shadow rounded">

                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1 class="text-center display-4 font-weight-bold">{{ __('Register') }}</h1>
                        <hr>
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input class="form-control border-0 bg-light shadow-sm @error('name') is-invalid @enderror"
                                    id="name"
                                    type="text"
                                    name="name"
                                    placeholder="Nombre de usuario ..."
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input class="form-control border-0 bg-light shadow-sm @error('email') is-invalid @enderror"
                                    id="email"
                                    type="email"
                                    name="email"
                                    placeholder="Email ..."
                                    value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input class="form-control border-0 bg-light shadow-sm @error('password') is-invalid @enderror"
                                    id="password"
                                    type="password"
                                    placeholder="Contraseña ..."
                                    name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input class="form-control border-0 bg-light shadow-sm"
                                id="password-confirm"
                                type="password"
                                placeholder="Confirmar contraseña ..."
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button class="btn btn-primary btn-lg btn-block"
                                type="submit">
                                {{ __('Register') }}
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
