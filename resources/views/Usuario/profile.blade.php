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
                        <form class="user" action="{{route('usuario.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="resume-content">
                                <input name="id" type="hidden" value="{{$user->id}}" ></input>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="nombre" placeholder="Nombre(s)" name="nombre" value="{{$user->nombre}}" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="apellido_paterno" placeholder="Apellido paterno" name="apellido_paterno" value="{{$user->apellido_paterno}}" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-user" type="text" id="apellido_materno" placeholder="Apellido materno" name="apellido_materno" value="{{$user->apellido_materno}}" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="alias" placeholder="Alias" name="alias" value="{{$user->alias}}" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            
                            <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input class="@error('imagen') is-invalid @enderror" type="file" value="{{route('usuario.imagen',$user->imagen)}}" name="imagen" id="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;" required> 
                                     @error('imagen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" value="{{$user->email}}" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="password" id="password" placeholder="Contraseña" name="password" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-user" type="password" id="password" placeholder="Repetir contraseña" name="password"  style="font-size: 18px;color: rgb(0,0,0);">
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