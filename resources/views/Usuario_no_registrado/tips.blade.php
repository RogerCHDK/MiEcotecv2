@extends('layouts.header-footer-usuario_no')

@section('content')
    @foreach($entornos as $entorno)
            
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
            
@endforeach

    
@endsection