
@extends('layouts.header-footer-usuario_no')

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
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0">
                                        @foreach($eventos as $evento)
                                        <a href="Evento">
                                            <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Eventos/image1.jpg">
                                            </div>
                                        </a>
                                        $eventos
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="Evento" style="font-size: 22px;">{{$evento->nombre}}</a>
                                            </h6>
                                            <p class="text-justify card-text objective_event" style="font-size: 18px;">{{$evento->descripcion}}<br></p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <div class="card shadow" style="margin-bottom: 24px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        <a href="event.html">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Eventos/image1.jpg">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="event.html" style="font-size: 22px;">Evento parque sierra</a>
                                            </h6>
                                            <p class="text-justify card-text objective_event" style="font-size: 18px;">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado el 29 del mismo mes y año.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <div class="card shadow" style="margin-bottom: 24px;">
                        <div class="card-body text-left">
                            <a class="btn btn-primary" role="button" action="create-event.html" href="create-event.html" style="font-size: 18px;">Crear evento</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        <a href="event.html">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Eventos/image1.jpg">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="event.html" style="font-size: 22px;">Evento parque sierra</a>
                                            </h6>
                                            <div class="d-flex justify-content-around" style="width: 100%;">
                                                <a class="btn btn-primary" role="button" style="font-size: 18px;" href="create-event.html">Modificar</a>
                                                <a class="btn btn-danger" role="button" style="font-size: 18px;" href="#">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @else
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Eventosssssssssssssssss</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0">
                            @foreach($eventos as $evento)
                                        <a href="Evento">
                                            <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Eventos/image1.jpg">
                                            </div>
                                        </a>
                                        $eventos
                                        <div class="card-body text-center">
                                            <h6>
                                                <a class="event_title" href="Evento" style="font-size: 22px;">{{$evento->nombre}}</a>
                                            </h6>
                                            <p class="text-justify card-text objective_event" style="font-size: 18px;">{{$evento->descripcion}}<br></p>
                                        </div>
                                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection