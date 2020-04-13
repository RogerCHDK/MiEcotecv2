@extends('layouts.header-footer-usuario')

@section('content')
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">Mis productos</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="card shadow">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Entorno</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                <a class="dropdown-item" role="presentation" href="#">Cosmeticos</a>
                                <a class="dropdown-item" role="presentation" href="#">Hogar</a>
                                <a class="dropdown-item" role="presentation" href="#">Oficina</a>
                                <a class="dropdown-item" role="presentation" href="#">Automóvil</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Productos</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="product.html">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="assets/img/Productos/toper.png">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6>
                                            <a class="event_title" href="product.html" style="font-size: 22px;"><strong>Tupper ecológico</strong><br></a>
                                        </h6>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="card shadow" style="margin-bottom: 24px;">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Entorno</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                <a class="dropdown-item" role="presentation" href="#">Cosmeticos</a>
                                <a class="dropdown-item" role="presentation" href="#">Hogar</a>
                                <a class="dropdown-item" role="presentation" href="#">Oficina</a>
                                <a class="dropdown-item" role="presentation" href="#">Automóvil</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Hogar</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-asis">
                                <div class="card border-0">
                                    <a href="tip.html">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="assets/img/Productos/toper.png">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6>
                                            <a class="event_title" href="tip.html" style="font-size: 22px;">Tupper ecológico</a>
                                        </h6>
                                        <div class="d-flex justify-content-around" style="width: 100%;">
                                            <a class="btn btn-primary" role="button" style="font-size: 18px;" href="create-product.html">Modificar</a>
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
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 30px;">Productos</p>
        </div>
        <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
            <div class="dropdown" style="width: 200px;">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Entorno</button>
                <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                    <a class="dropdown-item" role="presentation" href="#">Cosmeticos</a>
                    <a class="dropdown-item" role="presentation" href="#">Hogar</a>
                    <a class="dropdown-item" role="presentation" href="#">Oficina</a>
                    <a class="dropdown-item" role="presentation" href="#">Automóvil</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0">
                        <a href="product.html">
                            <div class="marco zoom-on-hover">
                                <img class="img-fluid image" src="assets/img/Productos/toper.png">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h6>
                                <a class="event_title" href="product.html" style="font-size: 22px;">
                                    <strong>Tupper ecológico</strong><br>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection