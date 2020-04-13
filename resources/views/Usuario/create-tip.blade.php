@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Crear consejo</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <input class="form-control form-control-user" type="text" placeholder="Nombre del consejo" name="nombreEvento" style="font-size: 18px;color: rgb(0,0,0);">
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;max-width: 100%;min-width: 100%;">Tipo de entorno</label>
                                <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="mesInicio">
                                    <optgroup label="Tipo de producto">
                                        <option value="01">Cosmeticos</option>
                                        <option value="02">Hogar</option>
                                        <option value="03">Oficina</option>
                                        <option value="04">Automóvil</option>
                                    </optgroup>
                                </select>
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
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Entorno</h4>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-1" name="entorno">
                                        <label class="form-check-label" for="formCheck-1">Oficina</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-2" name="entorno">
                                        <label class="form-check-label" for="formCheck-2">Habitación</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-3" name="entorno">
                                        <label class="form-check-label" for="formCheck-3">Comedor</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-4" name="entorno">
                                        <label class="form-check-label" for="formCheck-4">Jardín</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-5" name="entorno">
                                        <label class="form-check-label" for="formCheck-5">Automóvil</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-6" name="entorno">
                                        <label class="form-check-label" for="formCheck-6">Cocina</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-7" name="entorno">
                                        <label class="form-check-label" for="formCheck-7">Estudio</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="radio" id="formCheck-8" name="entorno">
                                        <label class="form-check-label" for="formCheck-8">Otro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Materiales</h4>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-1" name="material">
                                        <label class="form-check-label" for="formBox-1">Botella de vidrio</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-2" name="material">
                                        <label class="form-check-label" for="formBox-2">Botella de vidrio</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-3" name="material">
                                        <label class="form-check-label" for="formBox-3">Pedazo de metal</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-4" name="material">
                                        <label class="form-check-label" for="formBox-4">Hoja blanca</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-5" name="material">
                                        <label class="form-check-label" for="formBox-5">Lata de aluminio</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-6" name="material">
                                        <label class="form-check-label" for="formBox-6">Caja de cartón</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-7" name="material">
                                        <label class="form-check-label" for="formBox-7">Tabla de madera</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formBox-8" name="material">
                                        <label class="form-check-label" for="formBox-8">Garrafón</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 0px;">
                                <div class="text-center">
                                    <h4 class="mb-4" style="font-size: 18px;color: rgb(0,0,0);">Herramientas</h4>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-1" name="material">
                                        <label class="form-check-label" for="formHerr-1">Pintura</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-2" name="material">
                                        <label class="form-check-label" for="formHerr-2">Pegamento líquido</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-3" name="material">
                                        <label class="form-check-label" for="formHerr-3">Lápiz</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-4" name="material">
                                        <label class="form-check-label" for="formHerr-4">Martillo</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-5" name="material">
                                        <label class="form-check-label" for="formHerr-5">Tijeras</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-6" name="material">
                                        <label class="form-check-label" for="formHerr-6">Lápiz adhesivo</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-7" name="material">
                                        <label class="form-check-label" for="formHerr-7">Goma</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0 objs">
                                    <div class="form-check" style="font-size: 18px;color: rgb(0,0,0);">
                                        <input class="form-check-input" type="checkbox" id="formHerr-8" name="material">
                                        <label class="form-check-label" for="formHerr-8">Segueta</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Descripción" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);height: 160px;"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear consejo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection