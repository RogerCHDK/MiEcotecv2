
@extends('layouts.header-footer-usuario')

@section('content')
    @auth
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">AsistirĂ©</a>
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

                                                <form action="{{ route('evento.destroy', $miEvento->id) }}" method="POST">
                                                    {{ csrf_field() }} 
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input class="btn btn-danger" type="submit" style="font-size: 18px;" value="Eliminar">
                                                </form>
                                                
                                                
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
                                <p class="text-justify card-text objective_event" style="font-size: 18px;">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la â€œGaceta de Gobiernoâ€? del propio Estado el 29 del mismo mes y aĂ±o.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection