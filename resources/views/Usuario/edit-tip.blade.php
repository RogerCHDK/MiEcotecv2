@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Editar consejo</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('consejo.update', $consejo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="resume-content">
                                <input name="id_usuario" type="hidden" value="{{$users->id}}" ></input>
                            </div>
                            <div class="form-group row">
                                <input class="form-control form-control-user" type="text" placeholder="Nombre del consejo" name="nombre" value="{{$consejo->nombre}}" id="nombre" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de entorno</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="id_entorno" value="{{$consejo->nombre}}">
                                    <optgroup label="Tipo de producto">
                                         @foreach($entornos as $entorno) 
                                            <option value="{{$entorno->id}}">{{$entorno->nombre}}</option>
                                            @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input class="@error('imagen') is-invalid @enderror" type="file" name="imagen" id="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;" required> 
                                     @error('imagen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="assets/img/Eventos/image2.jpg" style="width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Entorno</h4>
                                </div>
                            </div>
                            @foreach($entornos as $entorno) 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-1" name="id_entorno" value="{{$entorno->id}}">
                                        <label class="form-check-label" for="formCheck-1">{{$entorno->nombre}}</label>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Materiales</h4>
                                </div>
                            </div>
                            @foreach($materiales as $material)
                            {{$ban=0}} 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    @foreach($cat_mat as $cat_mat1) 
                                    
                                    @if (($material->id) === ($cat_mat1->id))
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" checked="true" type="checkbox" id="formBox-1" name="material[]" value="{{$material->id}}">
                                        <label class="form-check-label" for="formBox-1">{{$material->nombre}}</label>
                                    </div>
                                    {{$ban=true}}
                                    @else
                                    
                                        
                                    @endif
                                    
                                    @endforeach
                                </div>
                                @if ($ban === 0)
                                
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-1" name="material[]" value="{{$material->id}}">
                                        <label class="form-check-label" for="formBox-1">{{$material->nombre}}</label>
                                    </div>
                                @endif
                            </div>
                            @endforeach
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Herramientas</h4>
                                </div>
                            </div>
                            
                            @foreach($herramientas as $herramienta) 

                            {{$ban=0}}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    
                                    
                                    @foreach($cat_herr as $cat_herr1) 
                                    
                                    @if (($herramienta->id) === ($cat_herr1->id))
                                    
                                    
                                        <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox"  checked="true" id="formHerr-1"  name="herramienta[]" value="{{$herramienta->id}}">
                                        <label class="form-check-label" for="formHerr-1">{{$herramienta->nombre}}</label>
                                        </div>
                                        {{$ban=true}}
                                    @else
                                    
                                        
                                    @endif
                                    
                                    @endforeach
                                </div>
                                @if ($ban === 0)
                                
                                <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-1"  name="herramienta[]" value="{{$herramienta->id}}">
                                        <label class="form-check-label" for="formHerr-1">{{$herramienta->nombre}}</label>
                                        </div>
                                        @endif

                            </div>
                            @endforeach
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Descripción" name="descripcion" value="{{$consejo->descripcion}}" style="font-size: 18px;color: rgb(0,0,0);height: 160px;">{{$consejo->descripcion}}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Modificar consejo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection