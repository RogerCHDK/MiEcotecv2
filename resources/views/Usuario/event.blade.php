@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Evento parque sierra</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xl-center" style="min-width: 100%;">
                    <img class="img-fluid" src="assets/img/Eventos/image1.jpg" style="min-width: 40%;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="min-width: 100%;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Objetivo</h4>
                            <p class="text-justify mb-4" style="color: rgb(0,0,0);font-size: 18px;">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado el 29 del mismo mes
                                y año.<br><br></p>
                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Descripción</h4>
                            <p class="text-justify" style="color: rgb(0,0,0);font-size: 18px;margin-bottom: 24px;">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado el 29 del mismo mes
                                y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado el 29
                                del mismo mes y año.<br><br></p>
                            <div class="d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 24px;">
                                <div class="row row-date" style="margin: 0px;">
                                    <div class="col-lg-7" style="max-width: 50%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Inicia</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">08 de marzo de 2020</span>
                                            <span style="color: rgb(0,0,0);font-size: 18px;">07:00am</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7" style="max-width: 50%;">
                                        <div style="min-width: 50%;">
                                            <h4 class="mb-2" style="color: #267d24;font-size: 22px;">Termina</h4>
                                            <span class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center" style="color: rgb(0,0,0);font-size: 18px;">08 de marzo de 2020</span>
                                            <span style="color: rgb(0,0,0);font-size: 18px;">02:00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="margin-bottom: 24px;font-size: 20px;">
                                <a class="event_title" href="assistants.html" style="font-size: 18px;">
                                    <i class="fa fa-group" style="margin-right: 10px;font-size: 25px;"></i>15 personas asistirán
                                </a>
                            </div>
                            <div class="text-center" style="margin-bottom: 24px;">
                                <button class="btn btn-primary" type="button" style="font-size: 18px;">Participar</button>
                                <button class="btn btn-danger" type="button" style="font-size: 18px;">Salir</button>
                            </div>
                            <div class="text-center">
                                <span style="color: rgb(0,0,0);font-size: 18px;">Evento creado por&nbsp;
                                    <a class="event_title" href="view-profile.html" style="font-size: 20px;">Vale Lu</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection