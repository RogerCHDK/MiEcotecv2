@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Asesor</p>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3" style="height: 100%;">
                        
                        <div class="card-body text-center shadow">
                            @if( Auth::guest() )
                                 <img class="img-adviser" src="">
                            @else
                             <img class="img-adviser" src="{{ route('usuario.imagen', ['filename' => Auth::user()->imagen]) }}">
                            @endif
                        </div>

                    </div>
                </div> 
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0">
                                        <i class="fas fa-arrow-up"></i>&nbsp;5% since last month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket fa-2x"></i>
                                        </div>
                                    </div>
                                    <p class="text-white-50 small m-0">
                                        <i class="fas fa-arrow-up"></i>&nbsp;5% since last month
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">
                                        <a class="event_title" href="view-profile.html">{{$asesor->usuario->nombre}} {{$asesor->usuario->apellido_paterno}} {{$asesor->usuario->apellido_materno}}</a>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column colum-esp">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Especialidad:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$asesor->especialidad}}</span>
                                        </div>
                                        <div class="col d-flex flex-column colum-esp">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Correo electrónico:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$asesor->correoElectronico}}</span>
                                        </div>
                                        <div class="col d-flex flex-column colum-tel">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Teléfono:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$asesor->telefono}}</span>
                                        </div>
                                        <div class="col d-flex flex-column" style="max-width: 100%;min-width: 100%;">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Reconocimientos:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$asesor->reconocimientos}}</span>
                                        </div>
                                        <div class="col d-flex flex-column" style="max-width: 100%;min-width: 100%;">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Sobre el asesor:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$asesor->descripcion}}
                                            </span>
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
@endsection