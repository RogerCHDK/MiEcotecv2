@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">{{$producto->nombre}}</p> 
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xl-center" style="min-width: 100%;">
                    <img class="img-fluid" src="{{route('usuario.producto-imagen',$producto->imagen)}}" style="min-width: 40%;max-height: 576px;">
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-6" style="min-width: 100%;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Descripción</h4>
                            <p class="text-justify" style="color: rgb(0,0,0);font-size: 18px;margin-bottom: 24px;">{{$producto->descripcion}}.<br></p>
                            <div class="d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 24px;">
                                <div class="row row-date">
                                    <div class="col-lg-7" style="margin: 0 auto;min-width: 100%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Teléfono</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">{{$producto->telefono}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 24px;">
                                <div class="row row-date">
                                    <div class="col-lg-7" style="margin: 0 auto;min-width: 100%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Precio</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">${{$producto->precio}} MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 24px;">
                                <a class="text-center d-xl-flex align-items-xl-center" href="{{$producto->url}}" style="font-size: 18px;max-width: 100%;" target="_blank">
                                    <br>
                                    <i class="icon ion-ios-world" style="font-size: 25px;margin-right: 10px;"></i>{{$producto->url}}
                                    <br>
                                </a>
                            </div>
                            <div class="text-center">
                                <span style="color: rgb(0,0,0);font-size: 18px;">Producto de&nbsp;<a class="event_title" href=" {{ route('usuario.show',$producto->id_usuario) }}" style="font-size: 20px;">{{$producto->usuario->nombre}} {{$producto->usuario->apellido_paterno}}</a></span>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection