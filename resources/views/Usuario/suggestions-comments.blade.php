@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Sugerencias o comentarios</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;">Tema</label>
                                    <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="mesInicio">
                                        <optgroup label="Tema">
                                            <option value="01">Registro</option>
                                            <option value="02">Eventos</option>
                                            <option value="03">Consejos</option>
                                            <option value="04">Asesores</option>
                                            <option value="05">Productos</option>
                                            <option value="06">Servicios</option>
                                            <option value="07">Publicidad</option>
                                            <option value="08">Otros</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Sugerencia o comentario" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection