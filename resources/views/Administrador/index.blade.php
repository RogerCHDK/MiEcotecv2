@extends('layouts.header-footer-administrador')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad</p>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-8 col-pub">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Pendiente</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/publicidad-pendiente.jpg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-pendiente') }}">Administrar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-pub">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Activa</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/publicidad-activa.jpg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-activa') }}">Administrar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-8 col-pub">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Eliminada</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/publicidad-eliminada.jpeg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-eliminada') }}">Administrar</a>
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