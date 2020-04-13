@extends('layouts.header-footer-administrador')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Agregar herramienta</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;"><input class="form-control form-control-user" type="text" placeholder="Nombre de la herramienta" name="nombreEvento" style="font-size: 18px;color: rgb(0,0,0);"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;"><label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label><input type="file" name="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;"></div>
                                <div
                                    class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;"><img src="assets/img/Eventos/image2.jpg" style="width: 100%;"></div>
                            </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Agregar</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection