@extends('layouts.header-footer-usuario')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Iniciar sesión</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 d-none d-lg-flex">
                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;{{ url('assets/img/Eventos/image2.jpg') }}&quot;);"></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="mb-4" style="font-size: 22px;color: rgb(38,125,36);">Bienvenido</h4>
                    </div>
                    <form class="user" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="password" placeholder="Contraseña" name="password" style="font-size: 18px;color: rgb(0,0,0);" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Iniciar sesión</button>
<!--                        <hr>
                        <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button" style="font-size: 18px;">
                            <i class="fab fa-google"></i>&nbsp; Iniciar sesión con Google
                        </a>-->
                        <hr>
                    </form>
<!--                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="event_title" href="{{ route('password.request') }}" style="font-size: 16px;">¿Se te olvidó la contraseña?</a>
                        </div>
                    @endif-->
                    @if (Route::has('register'))
                        <div class="text-center">
                            <a class="event_title" href="{{ route('register') }}" style="font-size: 16px;">Regístrate<br></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
