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
                                @foreach($entornos as $entorno) 
                <a class="nav-link" role="tab" data-toggle="tab" href="{{$entorno->id}}" value="{{$entorno->nombre}}">{{$entorno->nombre}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($entornos as $entorno) 
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$entorno->nombre}}</h1>
                        </div>
                        
                        <div class="row">
                            @foreach($consejos as $consejo) 
                                @if (($entorno->id) === ($consejo->id_entorno))
                                    <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="{{ route('consejo.show',$consejo->id) }}">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.consejo-imagen',$consejo->imagen)}}">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="{{ route('consejo.show',$consejo->id) }}" style="font-size: 22px;"><strong>{{$consejo->nombre}}</strong><br></a></h6>
                                        <p class="text-center" style="color: rgb(0,0,0);height: 24px;min-height: 24px;max-height: 24px;">5
                                            <i class="fa fa-thumbs-o-up" style="margin-left: 5px;font-size: 18px;"></i>
                                            <i class="fa fa-thumbs-up" style="margin-left: 5px;font-size: 18px;color: rgb(37,150,168);"></i>
                                        </p>
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
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="card shadow" style="margin-bottom: 24px;">
                    <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <a class="btn btn-primary" role="button" href="{{ route('consejo.create') }}" style="font-size: 18px;margin-right: 10px;">Crear consejo</a>
                        <div class="dropdown" style="width: 200px;">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Entorno</button>
                            <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                                @foreach($consejos as $consejo) 
                                <a class="dropdown-item" role="presentation" value="{{$consejo->catalogoEntorno->id}}" href="#">{{$consejo->catalogoEntorno->nombre}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($entornos as $entorno) 
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$entorno->nombre}}</h1>
                        </div>
                        
                        <div class="row">
                            @foreach($misconsejos as $misconsejo)  
                                @if (($entorno->id) === ($misconsejo->id_entorno))
                            
                                
                                    <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="{{ route('consejo.show',$misconsejo->id) }}">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.consejo-imagen',$misconsejo->imagen)}}">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="{{ route('consejo.show',$misconsejo->id) }}" style="font-size: 22px;"><strong>{{$misconsejo->nombre}}</strong><br></a></h6>
                                        <p class="text-center" style="color: rgb(0,0,0);height: 24px;min-height: 24px;max-height: 24px;">5
                                            <i class="fa fa-thumbs-o-up" style="margin-left: 5px;font-size: 18px;"></i>
                                            <i class="fa fa-thumbs-up" style="margin-left: 5px;font-size: 18px;color: rgb(37,150,168);"></i>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-around" style="width: 100%;">
                                                <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{ route('consejo.edit',$misconsejo->id) }}">Modificar</a>

                                                <form action="{{ route('consejo.destroy', ($misconsejo->id)) }}" method="POST">
                                                    {{ csrf_field() }} 
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input class="btn btn-danger" type="submit" style="font-size: 18px;" value="Eliminar">
                                                </form>
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




            @foreach($entornos as $entorno)
            <div class="tab-pane" role="tabpanel" id="{{$entorno->id}}">
                <div class="card shadow" style="margin-bottom: 24px;">
                    <div class="card-body">
                         
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">{{$entorno->nombre}}</h1>
                        </div>
                        
                        <div class="row">
                            @foreach($consejos as $consejo) 
                                @if (($entorno->id) === ($consejo->id_entorno))
                                    <div class="col-md-6 col-lg-4">
                                <div class="card border-0">
                                    <a href="{{ route('consejo.show',$consejo->id) }}">
                                        <div class="marco zoom-on-hover">
                                            <img class="img-fluid image" src="{{route('usuario.consejo-imagen',$consejo->imagen)}}">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h6><a class="event_title" href="{{ route('consejo.show',$consejo->id) }}" style="font-size: 22px;"><strong>{{$consejo->nombre}}</strong><br></a></h6>
                                        <p class="text-center" style="color: rgb(0,0,0);height: 24px;min-height: 24px;max-height: 24px;">5
                                            <i class="fa fa-thumbs-o-up" style="margin-left: 5px;font-size: 18px;"></i>
                                            <i class="fa fa-thumbs-up" style="margin-left: 5px;font-size: 18px;color: rgb(37,150,168);"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                                @endif
                                    
                                
                            
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
@endforeach


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
                    @foreach($consejos as $consejo) 
                    
                    <a class="dropdown-item" role="presentation" value="{{$consejo->catalogoEntorno->id}}" href="#">{{$consejo->catalogoEntorno->nombre}}</a>
                    @endforeach
                    <a class="dropdown-item" role="presentation" href="#">Cosmeticos</a>
                    <a class="dropdown-item" role="presentation" href="#">Hogar</a>
                    <a class="dropdown-item" role="presentation" href="#">Oficina</a>
                    <a class="dropdown-item" role="presentation" href="#">Automóvil</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Hogarrrrrrrrrrr</h1>
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