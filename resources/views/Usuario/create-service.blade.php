@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Crear servicio</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user" action="{{route('servicios.store')}}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input class="form-control form-control-user" type="text" placeholder="Nombre del establecimiento" name="nombre_establecimiento" id="nombre_establecimiento" style="font-size: 18px;color: rgb(0,0,0);">
                                <input class="form-control form-control-user" type="hidden"  name="id_usuario" id="id_usuario" value="{{$usuario}}">
                            </div>
                            <div class="form-group row"> 
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de servicio</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="id_clasificacionServicio" id="id_clasificacionServicio" >
                                    <optgroup label="Tipo de servicio"> 
                                         @foreach($servicios as $servicio) 
                                        <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                         @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input type="file" name="imagen" id="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;">
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="../assets/img/Eventos/image2.jpg" style="width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="margin-bottom: 10px!important">
                                    <input class="form-control form-control-user" type="text" placeholder="Estado" style="font-size: 18px;color: rgb(0,0,0);" name="estado" id="estado">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0" style="margin-bottom: 10px!important">
                                    <input class="form-control form-control-user" type="text" placeholder="Municipio" style="font-size: 18px;color: rgb(0,0,0);" name="municipio" id="municipio">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" placeholder="Colonia" style="font-size: 18px;color: rgb(0,0,0);" name="colonia" id="colonia">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" placeholder="Calle" style="font-size: 18px;color: rgb(0,0,0);" name="calle" id="calle">
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
                                    <input class="form-control form-control-user" type="tel" placeholder="Teléfono" style="font-size: 18px;color: rgb(0,0,0);" name="telefono">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 tip-entorno" style="min-width: 100%;">
                                    <p style="font-size: 18px;color: rgb(0,0,0);">La publicidad tiene un costo de $500 por 1 mes. Ingresa la cantidad de $500 en Paypal accediendo al siguiente enlace. Al validar el pago, se publicará la herramienta.</p>
                                    <a href="https://paypal.me/DESCMX?locale.x=es_XC" target="_blank" style="font-size: 18px;">https://paypal.me/DESCMXlocale.x=es_XC
                                    </a>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear servicio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection