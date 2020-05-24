@extends('layouts.header-footer-usuario')

@section('content') 
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">{{$evento->nombre}}</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xl-center" style="min-width: 100%;">
                    <img class="img-fluid" src="{{route('usuario.evento-imagen',$evento->imagen)}}" style="min-width: 40%;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="min-width: 100%;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Objetivo</h4>
                            <p class="text-justify mb-4" style="color: rgb(0,0,0);font-size: 18px;">{{$evento->objetivo}}<br><br></p>
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Descripción</h4>
                            <p class="text-justify" style="color: rgb(0,0,0);font-size: 18px;margin-bottom: 24px;">{{$evento->descripcion}}<br><br></p>
                            <div class="d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 24px;">
                                <div class="row row-date" style="margin: 0px;">
                                    <div class="col-lg-7" style="max-width: 50%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Inicia</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">{{$evento->fecha_inicio}}</span>
                                            <span style="color: rgb(0,0,0);font-size: 18px;">{{$evento->hora_inicio}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7" style="max-width: 50%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Termina</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">{{$evento->fecha_fin}}</span>
                                            <span style="color: rgb(0,0,0);font-size: 18px;">{{$evento->hora_fin}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="margin-bottom: 24px;font-size: 20px;">
                                <a class="event_title" href="{{route('registro.show',$evento->id)}}" style="font-size: 18px;">
                                    <i class="fa fa-group" style="margin-right: 10px;font-size: 25px;"></i> {{$registros}} personas asistirán
                                </a>
                            </div>
                             
                            @if ($reg===-1)
                                <div class="text-center" style="margin-bottom: 24px;">
                                    <a class="event_title" href="{{ route('register') }}" style="font-size: 18px;">
                                     Registrate para participar</a>
                                            
                                </div>

                            @else
                             @if ($reg===0)
                                    <form class="user" action="{{route('registro.store')}}" method="POST">
                                    {{ csrf_field() }} 
                                        <input class="form-control form-control-user" type="hidden"  id="id_usuario" name="id_usuario" value="{{$usuario->id}}" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-control form-control-user" type="hidden"  id="id_evento" name="id_evento" value="{{$evento->id}}" style="font-size: 18px;color: rgb(0,0,0);">
                                    
                                        <div class="text-center" style="margin-bottom: 24px;">
                                            <button class="btn btn-primary" type="submit" style="font-size: 18px;">Participar</button>
                                        </div>
                                    </form>
 
                                    @else
                                        <div class="text-center" style="margin-bottom: 24px;">
                                            @foreach($reg as $reg1)
                                                <form action="{{ route('registro.destroy', ($reg1->id)) }}" method="POST">
                                                    {{ csrf_field() }} 
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input class="btn btn-danger" type="submit" style="font-size: 18px;" value="Salir">
                                                </form>
                                            @endforeach
                                        </div>
                                        
                              @endif
                            @endif
                            
                            @foreach($user as $users)
                            
                            
                            <div class="text-center">
                                <span style="color: rgb(0,0,0);font-size: 18px;">Evento creado por&nbsp;
                                    <a class="event_title" href="{{ route('usuario.show',$users->id) }}" style="font-size: 20px;">{{$users->nombre}}&nbsp;{{$users->apellido_paterno}}</a>
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection