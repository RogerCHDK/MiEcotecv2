@extends('layouts.header-footer-usuario')

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
                                    <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 22px;">Productos</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center col-pub-1">
                                            <img src="assets/img/Publicdad/prdts.jpeg" style="width: 100%;">
                                        </div> 
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <span class="text-center" style="color: #267d24;font-size: 18px;margin-bottom: 10px;">Muestra tus productos ecológicos</span>
                                            <a class="btn btn-primary" role="button" href=" {{route('productos.create')}}">Obtener  publicidad</a> 
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
                                            <img src="assets/img/Publicdad/servicios.jpeg" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <span class="text-center" style="color: #267d24;font-size: 18px;margin-bottom: 10px;">Ofrece tus servicios ecológicos</span>
                                            <a class="btn btn-primary" role="button" href="{{route('servicios.create')}}">Obtener publicidad</a>
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
                                            <img src="assets/img/Publicdad/materiales.jpg" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <span class="text-center" style="color: #267d24;font-size: 18px;margin-bottom: 10px;">Anuncia tus materiales</span>
                                            <a class="btn btn-primary" role="button" href="{{route('usuario.material')}}">Obtener publicidad</a> 
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
                                            <img src="assets/img/Publicdad/herramientas.jpg" style="width: 100%;">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center col-pub-2">
                                            <span class="text-center" style="color: #267d24;font-size: 18px;margin-bottom: 10px;">Anuncia tus herramientas</span>
                                            <a class="btn btn-primary" role="button" href="publicity-tool.html">Obtener publicidad</a>
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