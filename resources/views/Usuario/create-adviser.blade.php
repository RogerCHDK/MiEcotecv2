@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Registro asesor</p>
        </div>
        <div class="card-body">
            <div class="row d-md-flex d-lg-flex d-xl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center mb-3">
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;">Tipo de asesor</label>
                                    <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="mesInicio">
                                        <optgroup label="Tipo de asesor">
                                            <option value="01">Cosmeticos</option>
                                            <option value="02">Hogar</option>
                                            <option value="03">Oficina</option>
                                            <option value="04">Automóvil</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico" name="correo" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="tel" placeholder="Teléfono" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" style="color: rgb(0,0,0);font-size: 18px;" placeholder="Especialidad">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user" placeholder="Reconocimientos" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-user" placeholder="Descripción" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection