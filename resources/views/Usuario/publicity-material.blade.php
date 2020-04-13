@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad de material</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0 tip-entorno">
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;">Tipo de material</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="mesInicio">
                                    <optgroup label="Tipo de material">
                                        <option value="01">Cosmeticos</option>
                                        <option value="02">Hogar</option>
                                        <option value="03">Oficina</option>
                                        <option value="04">Automóvil</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                <input type="file" name="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;">
                            </div>
                            <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                <img src="assets/img/Eventos/image2.jpg" style="width: 100%;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0 tip-entorno" style="min-width: 100%;">
                                <p style="font-size: 18px;color: rgb(0,0,0);">La publicidad tiene un costo de $500 por 1 mes. Ingresa la cantidad de $500 en Paypal accediendo al siguiente enlace. Al validar el pago, se publicará la herramienta.</p>
                                <a href="https://paypal.me/DESCMX?locale.x=es_XC" target="_blank" style="font-size: 18px;">https://paypal.me/DESCMXlocale.x=es_XC<br></a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear publicidad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection