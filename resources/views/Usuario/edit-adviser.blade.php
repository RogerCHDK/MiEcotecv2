@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Editar asesor</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user" action="{{route('asesor.update', $asesor->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="resume-content">
                                <input name="id_usuario" type="hidden" value="{{$users->id}}" ></input>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;">Tipo de asesor</label>
                                    <select name="id_clasificacionAsesor" class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" value="{{$asesor->catalogoClasificacionAsesor->nombre}}" name="id_clasificacionAsesor" id="id_clasificacionAsesor">
                                        <optgroup label="Tipo de asesor" name="id_clasificacionAsesor" value="{{$asesor->catalogoClasificacionAsesor->nombre}}">
                                            @foreach($tipos_asesor as $tipo_asesor) 
                                            <option value="{{$tipo_asesor->id}}">{{$tipo_asesor->nombre}}</option>
                                            @endforeach
                                            
                                        </optgroup>
                                    </select>
                                    
                                </div>
                            </div> 
                            <div class="form-group">
                                <input class="form-control form-control-user @error('correoElectronico') is-invalid @enderror" type="email" id="correoElectronico" aria-describedby="emailHelp" placeholder="Correo electr??nico" name="correoElectronico" value="{{$asesor->correoElectronico}}" style="font-size: 18px;color: rgb(0,0,0);">
                                @error('correoElectronico')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('telefono') is-invalid @enderror" type="tel" placeholder="Tel??fono" style="font-size: 18px;color: rgb(0,0,0);" id="telefono" value="{{$asesor->telefono}}" name="telefono">
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('especialidad') is-invalid @enderror" type="text" style="color: rgb(0,0,0);font-size: 18px;" placeholder="Especialidad" id="especialidad" value="{{$asesor->especialidad}}" name="especialidad">
                                    @error('especialidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user @error('reconocimientos') is-invalid @enderror" placeholder="Reconocimientos" id="reconocimientos" name="reconocimientos" value="{{$asesor->reconocimientos}}" style="font-size: 18px;color: rgb(0,0,0);" >{{$asesor->reconocimientos}}</textarea>
                                @error('reconocimientos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user @error('descripcion') is-invalid @enderror" placeholder="Descripci??n" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);" id="descripcion" name="descripcion">{{$asesor->descripcion}}</textarea>
                                @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection