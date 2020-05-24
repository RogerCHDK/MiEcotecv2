@extends('layouts.header-footer-administrador')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad eliminada</p>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-8 col-pub">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Productos</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/prdts.jpeg') }}" style="width: 100%;">
                                        </div> 
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">               
                                            <a class="btn btn-primary" role="button" href=" {{ route('admin.publicidad-eliminada-producto') }}">Administrar</a> 
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
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Servicios</p>
                                </div> 
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/servicios.jpeg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-eliminada-servicio') }}">Administrar</a>
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
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Materiales</p>
                                </div>
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/materiales.jpg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-eliminada-material') }}">Administrar</a> 
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
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Herramientas</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="{{ url('assets/img/Publicdad/herramientas.jpg') }}" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-eliminada-herramienta') }}">Administrar</a>
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