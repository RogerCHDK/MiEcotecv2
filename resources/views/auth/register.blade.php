@extends('layouts.header-footer-usuario')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
        <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Registro</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-flex">
                <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;{{ url('assets/img/Eventos/image9.jpg') }}&quot;);"></div>
            </div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="mb-4" style="font-size: 22px;color: rgb(38,125,36);">Crea una cuenta</h4>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user @error('nombre') is-invalid @enderror" type="text" id="nombre" placeholder="Nombre(s)" name="nombre" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user @error('apellidoPaterno') is-invalid @enderror" type="text" id="apellidoPaterno" placeholder="Apellido paterno" name="apellidoPaterno" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('apellidoPaterno') }}" required autocomplete="apellidoPaterno" autofocus>
                                @error('apellidoPaterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control form-control-user @error('apellidoMaterno') is-invalid @enderror" type="text" id="apellidoMaterno" placeholder="Apellido materno" name="apellidoMaterno" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('apellidoMaterno') }}" required autocomplete="apellidoMaterno" autofocus>
                                @error('apellidoMaterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user @error('alias') is-invalid @enderror" type="text" id="alias" placeholder="Alias" name="alias" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                                @error('alias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 18px;color: rgb(0,0,0);">Imagen (600x800 pixeles)</label>
                            <input class="@error('imagen') is-invalid @enderror" type="file" accept="image/*" style="width: 100%;" name="imagen" id="imagen">
                            @error('imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                            <img src="" style="max-width: 30%;" id="imagenSalida">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" style="font-size: 18px;color: rgb(0,0,0);" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="password" placeholder="Contraseña" name="password" style="font-size: 18px;color: rgb(0,0,0);" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control form-control-user" type="password" id="password_confirm" placeholder="Repetir contraseña" style="font-size: 18px;color: rgb(0,0,0);" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Registrar cuenta</button>
                        <hr>
<!--                        <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button" style="font-size: 18px;">
                            <i class="fab fa-google"></i>&nbsp; Registrarse con Google
                        </a>
                        <hr>-->
                    </form>
<!--                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="event_title" href="{{ route('password.request') }}" style="font-size: 16px;">¿Se te olvidó la contraseña?</a>
                        </div>
                    @endif-->
                    @if (Route::has('login'))
                        <div class="text-center">
                            <a class="event_title" href="{{ route('login') }}" style="font-size: 16px;">¿Ya tienes una cuenta? Inicia sesión</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
