@extends('layouts.header-footer-usuario')

@section('content')
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Consejos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">Mis consejos</a>
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
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Hogar</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="tip.html">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="assets/img/Eventos/image3.jpg">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="tip.html" style="font-size: 22px;"><strong>Flores En Botellas Plásticas Como Maceteros</strong><br></a></h6>
                                        <p class="text-center" style="color: rgb(0,0,0);height: 24px;min-height: 24px;max-height: 24px;">5
                                            <i class="fa fa-thumbs-o-up" style="margin-left: 5px;font-size: 18px;"></i>
                                            <i class="fa fa-thumbs-up" style="margin-left: 5px;font-size: 18px;color: rgb(37,150,168);"></i>
                                        </p>
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
                        <a class="btn btn-primary" role="button" href="{{ route('consejo.create') }}" style="font-size: 18px;margin-right: 10px;">Crear consejo</a>
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
                                            <img class="img-fluid image" src="assets/img/Consejos/maceta.jpg">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="tip.html" style="font-size: 22px;">Evento parque sierra</a></h6>
                                        <div class="d-flex justify-content-around" style="width: 100%;">
                                            <a class="btn btn-primary" role="button" style="font-size: 18px;" href="create-tip.html">Modificar</a>
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
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 30px;">Consejos</p>
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
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Hogar</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0">
                        <a href="tip.html">
                            <div class="marco zoom-on-hover">
                                <img class="img-fluid image" src="assets/img/Eventos/image3.jpg">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h6><a class="event_title" href="tip.html" style="font-size: 22px;"><strong>Flores En Botellas Plásticas Como Maceteros</strong><br></a></h6>
                            <p class="text-center" style="color: rgb(0,0,0);height: 24px;min-height: 24px;max-height: 24px;">5
                                <i class="fa fa-thumbs-o-up" style="margin-left: 5px;font-size: 18px;"></i>
                                <i class="fa fa-thumbs-up" style="margin-left: 5px;font-size: 18px;color: rgb(37,150,168);"></i>
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection