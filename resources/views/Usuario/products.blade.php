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
                                @foreach($clasificaciones as $clasificacion) 
                                <a class="dropdown-item" role="presentation" href="#{{$clasificacion->nombre}}">{{$clasificacion->nombre}}</a>
                                 @endforeach 
                            </div> 
                        </div> 
                    </div> 
                    <!--Aqui va a empezar el for each -->
                    @foreach($clasificaciones as $clasificacion) 
                    <div class="card-body" id="{{$clasificacion->nombre}}">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$clasificacion->nombre}}</h1>
                        </div>
                         @foreach($productos as $producto)
                         @if($clasificacion->id == $producto->id_clasificacionProducto)
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="{{route('productos.show',$producto->id)}}"> 
                                        <div class="marco zoom-on-hover">
                                        <img class="img-fluid image" src="{{route('usuario.producto-imagen',$producto->imagen)}}"> 
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6>
                                            <a class="event_title" href="{{route('productos.show',$producto->id)}}" style="font-size: 22px;"><strong>{{$producto->nombre}}</strong><br></a>
                                        </h6>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        @endif
                        @endforeach 
                    </div>
                    
                      <!--Aqui va a terminar el for each -->
                      @endforeach 
                </div>
            </div>





            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="card shadow" style="margin-bottom: 24px;">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Entorno</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                @foreach($clasificaciones as $clasificacion) 
                                <a class="dropdown-item" role="presentation" href="#{{$clasificacion->nombre}}">{{$clasificacion->nombre}}</a>
                                 @endforeach 
                            </div> 
                        </div>
                    </div>

                     @foreach($clasificaciones as $clasificacion) 
                    <div class="card-body"id="{{$clasificacion->nombre}}">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$clasificacion->nombre}}</h1>
                        </div>
                        @foreach($mis_productos as $mi_producto)
                         @if($clasificacion->id == $mi_producto->id_clasificacionProducto)
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-asis">
                                <div class="card border-0">
                                    <a href="tip.html">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.producto-imagen',$mi_producto->imagen)}}"> 
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6>
                                            <a class="event_title" href="tip.html" style="font-size: 22px;">{{$mi_producto->nombre}}</a>
                                        </h6>
                                        <div class="d-flex justify-content-around" style="width: 100%;">
                                            <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{route('productos.edit',1)}}">Modificar</a> 
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