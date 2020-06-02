 @extends('layouts.header-footer-usuario') 

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Editar producto</p>
        </div> 
        <div class="card-body"> 
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('productos.update', $elemento->id)}}" method="POST" enctype="multipart/form-data">    
                            @csrf  
                             <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group row">  
                                <input class="form-control form-control-user @error('nombre') is-invalid @enderror" type="text" placeholder="Nombre del producto" name="nombre" id="nombre" style="font-size: 18px;color: rgb(0,0,0);max-width: 67%;" value="{{$elemento->nombre}}">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input class="form-control form-control-user" type="hidden"  name="id_usuario" id="id_usuario" value="{{$elemento->id_usuario}}">
                            </div>
                            <div class="form-group row"> 
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de producto</label> 
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="id_clasificacionProducto" id="id_clasificacionProducto">
                                    <optgroup label="Tipo de producto">
                                        @foreach($productos as $producto) 
                                        @if($producto->id == $elemento->id_clasificacionProducto)
										<option selected value="{{$producto->id}}">{{$producto->nombre}}</option>
                                        @else
											<option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                        @endif
                                        @endforeach
                                    </optgroup>   
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input class="@error('imagen') is-invalid @enderror" type="file" name="imagen" id="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;" > 
                                     @error('imagen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="{{ route('usuario.producto-imagen',   ['filename' => $elemento->imagen]) }}" style="width: 100%;" id="imagenSalida"> 
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user @error('descripcion') is-invalid @enderror" placeholder="Descripción" name="descripcion" id="descripcion" style="font-size: 18px;color: rgb(0,0,0);height: 160px;">{{$elemento->descripcion}}
                                    </textarea>
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

                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user @error('telefono') is-invalid @enderror" type="tel" placeholder="Teléfono" style="font-size: 18px;color: rgb(0,0,0);" name="telefono" id="telefono" value="{{$elemento->telefono}}">
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center mb-3 mb-sm-0">
                                    <span style="font-size: 18px;color: rgb(0,0,0);margin-right: 5px;">$</span>
                                    <input class="form-control form-control-user" type="number" step="any" style="font-size: 18px;color: rgb(0,0,0);max-width: 80%;" placeholder="Precio" name="precio" id="precio" value="{{$elemento->precio}}">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Modificar producto</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection