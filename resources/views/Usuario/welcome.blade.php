<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EcoTec
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
@extends('layouts.header-footer-usuario')

@section('content')
    @auth
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">Asistiré</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: #267d24;font-size: 20px;">Mis eventos</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                @foreach($eventos as $evento)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0">


                                        
                                        <a href="{{ route('evento.show',$evento->id) }}">
                                            <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center marco zoom-on-hover">
                                                <img class="img-fluid image" src="{{route('usuario.evento-imagen',$evento->imagen)}}">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="{{ route('evento.show',$evento->id) }}" style="font-size: 22px;">{{$evento->nombre}}</a>
                                            </h6>
                                            <p class="text-justify card-text objective_event" style="font-size: 18px;">{{$evento->descripcion}}<br></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <div class="card shadow" style="margin-bottom: 24px;">
                        <div class="card-body">
                            <div class="row">
                                @foreach($registros as $registro)
                                
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        <a href="{{ route('evento.show',$registro->evento->id) }}">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="{{route('usuario.evento-imagen',$registro->evento->imagen)}}">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="{{ route('evento.show',$registro->evento->id) }}" style="font-size: 22px;">{{$registro->evento->nombre}}</a>
                                            </h6>
                                            <p class="text-justify card-text objective_event" style="font-size: 18px;">{{$registro->evento->objetivo}}.</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <div class="card shadow" style="margin-bottom: 24px;">
                        <div class="card-body text-left">
                            <a class="btn btn-primary" role="button" action="create-event.html" href="{{route ('evento.create')}}" style="font-size: 18px;">Crear evento </a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @foreach($misEventos as $miEvento)
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        
                                         
                                        <a href="{{ route('evento.show',$miEvento->id) }}">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="{{route('usuario.evento-imagen',$miEvento->imagen)}}">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="{{ route('evento.show',$miEvento->id) }}" style="font-size: 22px;">{{$miEvento->nombre}}</a>
                                            </h6>
                                            <div class="d-flex justify-content-around" style="width: 100%;">
                                                <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{ route('evento.edit',$miEvento->id) }}">Modificar</a>
                                                <a class="btn btn-danger" role="button" style="font-size: 18px;" href="#">Eliminar</a>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Eventos</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0">
                            <a href="event.html">
                                <div class="marco zoom-on-hover">
                                    <img class="img-fluid image" src="assets/img/Eventos/image1.jpg">
                                </div>
                            </a>
                            <div class="card-body text-center">
                                <h6>
                                    <a class="event_title" href="Evento1" style="font-size: 22px;">Evento parque sierra</a>
                                </h6>
                                <p class="text-justify card-text objective_event" style="font-size: 18px;">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado el 29 del mismo mes y año.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection