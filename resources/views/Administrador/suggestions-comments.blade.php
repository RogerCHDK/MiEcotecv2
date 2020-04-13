@extends('layouts.header-footer-administrador')

@section('content')
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Sugerencias o comentarios</p>
    </div>
    <div class="card-body">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #267d24;font-size: 20px;">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: #267d24;font-size: 20px;">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: #267d24;font-size: 20px;">Consejos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-4" style="color: #267d24;font-size: 20px;">Asesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-5" style="color: #267d24;font-size: 20px;">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-6" style="color: #267d24;font-size: 20px;">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-7" style="color: #267d24;font-size: 20px;">Publicidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#tab-8" style="color: #267d24;font-size: 20px;">Otros</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Sugerencia o comentario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-7">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="color: rgb(0,0,0);">
                                        <label style="font-size: 18px;">Mostrar&nbsp;
                                            <select class="form-control form-control-sm custom-select custom-select-sm" style="width: 50%;color: rgb(0,0,0);">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;filas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead style="color: #267d24;">
                                        <tr>
                                            <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                            <th style="font-size: 18px;width: 10%;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);">
                                        <tr>
                                            <td class="text-justify">Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta de Gobierno” del propio Estado
                                                el 29 del mismo mes y año. Este parque ubicado en el municipio de Toluca, fue declarado originalmente por Decreto del Ejecutivo Estatal de fecha 22 de julio de 1976, publicado en la “Gaceta
                                                de Gobierno” del propio Estado el 29 del mismo mes y año.
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" role="button" href="#">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="color: #267d24;">
                                        <tr>
                                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                                            <td><strong>Acción</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 18px;">Mostrando 1 a 10 de 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
