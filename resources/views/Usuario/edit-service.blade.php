 @extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Editar servicio</p> 
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('servicios.update',$elemento->id)}}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group row">
                                <input class="form-control form-control-user @error('nombre_establecimiento') is-invalid @enderror" type="text" placeholder="Nombre del establecimiento" name="nombre_establecimiento" id="nombre_establecimiento" style="font-size: 18px;color: rgb(0,0,0);" value="{{$elemento->nombre_establecimiento}}">
                                @error('nombre_establecimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <input class="form-control form-control-user" type="hidden"  name="id_usuario" id="id_usuario" value="{{$elemento->id_usuario}}">
                            </div>
                            <div class="form-group row"> 
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de servicio</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="id_clasificacionServicio" id="id_clasificacionServicio" >
                                    <optgroup label="Tipo de servicio"> 
                                         @foreach($servicios as $servicio) 
                                        @if($servicio->id == $elemento->id_clasificacionServicio)
                                        <option selected value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                        @else
                                            <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                        @endif
                                         @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input class="@error('imagen') is-invalid @enderror" type="file" name="imagen" id="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;">
                                    @error('imagen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="{{ route('usuario.servicio-imagen',   ['filename' => $elemento->imagen]) }}" style="width: 100%;" id="imagenSalida">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="margin-bottom: 10px!important">
                                    <input class="form-control form-control-user @error('estado') is-invalid @enderror" type="text" placeholder="Estado" style="font-size: 18px;color: rgb(0,0,0);" name="estado" id="estado" value="{{$elemento->estado}}">
                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0" style="margin-bottom: 10px!important">
                                    <input class="form-control form-control-user @error('municipio') is-invalid @enderror" type="text" placeholder="Municipio" style="font-size: 18px;color: rgb(0,0,0);" name="municipio" id="municipio" value="{{$elemento->municipio}}">
                                    @error('municipio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('colonia') is-invalid @enderror" type="text" placeholder="Colonia" style="font-size: 18px;color: rgb(0,0,0);" name="colonia" id="colonia" value="{{$elemento->colonia}}">

                                     @error('colonia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('calle') is-invalid @enderror" type="text" placeholder="Calle" style="font-size: 18px;color: rgb(0,0,0);" name="calle" id="calle" value="{{$elemento->calle}}">
                                     @error('calle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user @error('descripcion') is-invalid @enderror" placeholder="Descripción" name="descripcion" id="descripcion" style="font-size: 18px;color: rgb(0,0,0);height: 160px;">{{$elemento->descripcion}}</textarea>
                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <input class="form-control form-control-user @error('url') is-invalid @enderror" type="url" style="color: rgb(0,0,0);font-size: 18px;" placeholder="URL" name="url" id="url" value="{{$elemento->url}}">
                                </div>
                                @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('telefono') is-invalid @enderror" type="tel" placeholder="Teléfono" style="font-size: 18px;color: rgb(0,0,0);" name="telefono" value="{{$elemento->telefono}}">
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
