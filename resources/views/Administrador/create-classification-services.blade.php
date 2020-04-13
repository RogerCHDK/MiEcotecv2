@extends('layouts.header-footer-administrador')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Agregar clasificación de servicios</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <input class="form-control form-control-user" type="text" placeholder="Nombre de la clasificación" name="nombreEvento" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection