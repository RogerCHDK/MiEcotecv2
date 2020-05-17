@extends('layouts.header-footer-usuario')
 
@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 30px;">Asesores</p>
        </div>
        <div class="card-body text-left d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start">
            <div class="dropdown" style="width: 200px;">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-size: 18px;">Tipo de asesor</button>
                <div class="dropdown-menu" role="menu" style="width: 180px;font-size: 16px;">
                    <a class="dropdown-item" role="presentation" href="#">Cosmeticos</a>
                    <a class="dropdown-item" role="presentation" href="#">Hogar</a>
                    <a class="dropdown-item" role="presentation" href="#">Oficina</a>
                    <a class="dropdown-item" role="presentation" href="#">Automóvil</a>
                </div>
            </div> 

            @if ($as===0)
                <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{ route('asesor.create') }}">¿Eres asesor?</a>
 
                @else
                    @foreach($as as $ase)
                        <a class="btn btn-primary" role="button" style="font-size: 18px;" href="{{ route('asesor.edit',$ase->id) }}">Modificar perfil asesor</a>
                        <form action="{{ route('asesor.destroy', ($ase->id)) }}" method="POST">
                            {{ csrf_field() }} 
                            <input type="hidden" name="_method" value="DELETE">
                            <input class="btn btn-danger" type="submit" style="font-size: 18px;" value="Eliminar">
                        </form>
                    @endforeach
                                        
            @endif

            
        </div> 
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 30px;color: rgb(38,125,36);">Botánica</h1>
            </div>
            <div class="row">
                @foreach($asesores as $asesor)
                <div class="col-md-6 col-lg-4 col-asesor">
                    <div class="card border-0">
                        <a href="{{ route('asesor.show',$asesor->id) }}">
                            <div class="marco zoom-on-hover">
                                <img class="img-fluid image" src="assets/img/dogs/image3.jpeg">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h6> 
                                <a class="event_title" href="{{ route('asesor.show',$asesor->id) }}" style="font-size: 22px;">{{$asesor->usuario->alias}} </a>
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection