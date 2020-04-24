@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Crear producto</p>
        </div> 
        <div class="card-body"> 
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('productos.store')}}" method="POST"enctype="multipart/form-data">  
                            @csrf
                            <div class="form-group row"> 
                                <input class="form-control form-control-user" type="text" placeholder="Nombre del producto" name="nombre" id="nombre" style="font-size: 18px;color: rgb(0,0,0);max-width: 67%;">

                                <input class="form-control form-control-user" type="hidden"  name="id_usuario" id="id_usuario" value="{{$usuario}}">

                                <!-- <input class="form-control form-control-user" type="hidden"  name="id_pago" id="id_pago" value="1">-->
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de producto</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="id_clasificacionProducto" id="id_clasificacionProducto">
                                    <optgroup label="Tipo de producto">
                                          @foreach($productos as $producto) 
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
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
                                    <img src="../assets/img/Eventos/image2.jpg" style="width: 100%;"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Descripción" name="descripcion" id="descripcion" style="font-size: 18px;color: rgb(0,0,0);height: 160px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <input class="form-control form-control-user" type="url" style="color: rgb(0,0,0);font-size: 18px;" placeholder="URL" name="url" id="url">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="tel" placeholder="Teléfono" style="font-size: 18px;color: rgb(0,0,0);" name="telefono" id="telefono">
                                </div>
                                <div class="col-sm-6 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center mb-3 mb-sm-0">
                                    <span style="font-size: 18px;color: rgb(0,0,0);margin-right: 5px;">$</span>
                                    <input class="form-control form-control-user" type="number" style="font-size: 18px;color: rgb(0,0,0);max-width: 80%;" placeholder="Precio" name="precio" id="precio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 tip-entorno" style="min-width: 100%;">
                                    <p style="font-size: 18px;color: rgb(0,0,0);">La publicidad tiene un costo de $500 por 1 mes. Ingresa la cantidad de $500 en Paypal accediendo al siguiente enlace. Al validar el pago, se publicará la herramienta.</p>
                                    <a href="https://paypal.me/DESCMX?locale.x=es_XC" target="_blank" style="font-size: 18px;">https://paypal.me/DESCMXlocale.x=es_XC</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear producto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection