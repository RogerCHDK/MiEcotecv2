@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Perfil</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombre(s)" name="nombre" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellido paterno" name="apellidoPaterno" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellido materno" name="apellidoPaterno" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Alias" name="alias" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 18px;color: rgb(0,0,0);">Imagen (600x800 pixeles)</label>
                                <input type="file" accept="image/*" style="width: 100%;" name="imagen">
                            </div>
                            <div class="form-group d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                                <img src="assets/img/dogs/image3.jpeg" style="max-width: 30%;">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico" name="correo" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Contraseña" name="contrasenia" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repetir contraseña" name="contrasenia" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center align-items-lg-center align-items-xl-center">
                                <i class="fa fa-facebook-official" style="font-size: 30px;margin-right: 10px;color: #152491;"></i>
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Perfil de Facebook" name="enlaceFacebook" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center align-items-lg-center align-items-xl-center">
                                <i class="fa fa-instagram" style="font-size: 30px;margin-right: 10px;color: rgb(255,255,255);"></i>
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Perfil de Instagram" name="enlaceInstagram" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center align-items-lg-center align-items-xl-center">
                                <i class="fa fa-twitter-square" style="font-size: 30px;margin-right: 10px;color: #00aced;"></i>
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Perfil de Twitter" name="enlaceTwitter" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection