@extends('layouts.header-footer-usuario')

@section('content')
@if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div> 
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">Mis servicios</a>
            </li>
        </ul> 

        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="card shadow">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Servicios</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                @foreach($clasificaciones as $clasificacion)  
                                <a class="dropdown-item" role="presentation" href="#{{$clasificacion->nombre}}">{{$clasificacion->nombre}}</a>
                                 @endforeach 
                            </div>
                        </div>
                    </div>

                    @foreach($clasificaciones as $clasificacion)
                    <div class="card-body" id="{{$clasificacion->nombre}}">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$clasificacion->nombre}}</h1>
                        </div>
                        @foreach($servicios as $servicio)
                         @if($clasificacion->id == $servicio->id_clasificacionServicio)
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="{{route('servicios.show',$servicio->id)}}">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.servicio-imagen',$servicio->imagen)}}">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6>
                                            <a class="event_title" href="{{route('servicios.show',$servicio->id)}}" style="font-size: 22px;">{{$servicio->nombre_establecimiento}}<br></a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                     @endforeach 
                </div>
            </div>


            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="card shadow" style="margin-bottom: 24px;">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Servicios</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                @foreach($clasificaciones as $clasificacion) 
                                <a class="dropdown-item" role="presentation" href="#{{$clasificacion->nombre}}m">{{$clasificacion->nombre}}</a>
                                 @endforeach 
                            </div>
                        </div>
                    </div>

                     @foreach($clasificaciones as $clasificacion)
                    <div class="card-body" id="{{$clasificacion->nombre}}m">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$clasificacion->nombre}}</h1>
                        </div>
                         @foreach($mis_servicios as $mi_servicio)
                         @if($clasificacion->id == $mi_servicio->id_clasificacionServicio)
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-asis">
                                <div class="card border-0">
                                    <a href="{{route('servicios.show',$mi_servicio->id)}}">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.servicio-imagen',$mi_servicio->imagen)}}">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="{{route('servicios.show',$mi_servicio->id)}}" style="font-size: 22px;">{{$mi_servicio->nombre_establecimiento}}</a></h6>
                                        <div class="d-flex justify-content-around" style="width: 100%;">
                                            <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{route('servicios.edit',$mi_servicio->id)}}">Modificar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endif
                        @endforeach
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection