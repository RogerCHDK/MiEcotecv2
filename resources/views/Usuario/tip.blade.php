@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">{{$consejo->nombre}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xl-center" style="min-width: 100%;">
                    <img class="img-fluid" src="{{route('usuario.consejo-imagen',$consejo->imagen)}}" style="min-width: 40%;max-height: 576px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="min-width: 100%;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Materiales</h4>
                            <div class="row" style="margin-top: 20px;">
                                @foreach($cat_mat as $cat_mat1) 
                                
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        <a href="#">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Consejos/botella.jpg">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6><span style="font-size: 18px;color: rgb(0,0,0);">{{$cat_mat1->nombre}}</span></h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Herramientas</h4>
                            <div class="row" style="margin-top: 20px;">

                                @foreach($cat_herr as $cat_herr1) 
                                
                                <div class="col-md-6 col-lg-4 col-asis">
                                    <div class="card border-0">
                                        <a href="#">
                                            <div class="marco zoom-on-hover">
                                                <img class="img-fluid image" src="assets/img/Consejos/botella.jpg">
                                            </div>
                                        </a>
                                        <div class="card-body text-center">
                                            <h6><span style="font-size: 18px;color: rgb(0,0,0);">{{$cat_herr1->nombre}}</span></h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Descripción</h4>
                            <p class="text-justify" style="color: rgb(0,0,0);font-size: 18px;margin-bottom: 24px;">{{$consejo->descripcion}}
                            
                            @foreach($user as $users)
                            <div class="text-center">
                                <span style="color: rgb(0,0,0);font-size: 18px;">Evento creado por&nbsp;
                                    <a class="event_title" href="{{ route('usuario.show',$users->id) }}" style="font-size: 20px;">{{$users->nombre}}&nbsp;{{$users->apellido_paterno}}</a>
                                </span>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection