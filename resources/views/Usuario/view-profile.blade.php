@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Perfil</p>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow">
                            <img class="rounded-circle mb-3 mt-4" src="{{ route('usuario.imagen',$user->imagen) }}" width="160" height="160">
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
                                        <div class="col-auto">
                                            <i class="fas fa-rocket fa-2x"></i>
                                        </div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
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
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Información básica</p>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="margin-bottom: 5px;">
                                        <div class="col d-flex flex-column">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Nombre(s):</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$user->nombre}}</span>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Apellidos:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$user->apellido_paterno}} {{$user->apellido_materno}}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 5px;">
                                        <div class="col d-flex flex-column">
                                            <span style="color: #267d24;font-size: 18px;margin-right: 3px;">Alias:</span>
                                            <span class="text-justify" style="color: rgb(0,0,0);font-size: 18px;">{{$user->alias}}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 5px;">
                                        <div class="col d-xl-flex justify-content-xl-start align-items-xl-center" style="min-width: 100%;">
                                            @if($user->enlace_facebook ===null)
                                            @else
                                                <i class="fa fa-facebook-official" style="font-size: 30px;margin-right: 10px;color: #152491;"></i>
                                            <a href="{{$user->enlace_facebook}}" target="_blank" style="font-size: 18px;">{{$user->enlace_facebook}}<br></a>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 5px;">
                                        <div class="col d-xl-flex justify-content-xl-start align-items-xl-center">
                                            @if($user->enlace_instagram ===null)
                                            @else
                                                <i class="fa fa-instagram d-flex d-sm-flex d-md-flex d-lg-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"
                                            style="font-size: 24px;margin-right: 10px;color: rgb(255,255,255);width: 26px;height: 30px;"></i>
                                            <a href="https://es-la.facebook.com/" target="_blank" style="font-size: 18px;">{{$user->enlace_instagram}}<br></a>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 5px;">
                                        <div class="col d-xl-flex justify-content-xl-start align-items-xl-center" style="min-width: 100%;">
                                            @if($user->enlace_twitter ===null)
                                            @else
                                            <i class="fa fa-twitter-square" style="font-size: 30px;margin-right: 10px;color: #00aced;"></i>
                                            <a href="https://es-la.facebook.com/" target="_blank" style="font-size: 18px;">{{$user->enlace_twitter}}<br></a>
                                            @endif
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