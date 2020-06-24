@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="bg-white py-3 px-4 shadow rounded">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="text-center display-4 font-weight-bold">{{ __('Login') }}</h1>
                        <hr>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control border-0 bg-light shadow-sm @error('email') is-invalid @enderror"
                                    id="email"
                                    type="email"
                                    name="email"
                                    placeholder="Email ..."
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input class="form-control border-0 bg-light shadow-sm @error('password') is-invalid @enderror"
                                    name="password"
                                    id="password"
                                    type="password"
                                    placeholder="Contraseña ..."
                                    required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <div style="text-align:center">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
