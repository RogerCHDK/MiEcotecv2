@extends('layouts.header-footer-administrador')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad</p>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 25px;color: rgb(38,125,36);">Pendiente</h1>
            </div>
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
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                            <input class="form-control" type="text" placeholder="Buscar nombre" style="color: rgb(0,0,0);">
                            <button class="btn btn-primary" type="button" style="height: 37px;">
                                <i class="fa fa-search" style="font-size: 18px;"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                <table class="table dataTable my-0" id="dataTable">
                    <thead style="color: #267d24;">
                        <tr>
                            <th style="font-size: 18px;">Nombre usuario</th>
                            <th style="font-size: 18px;">ID Pago</th>
                            <th style="font-size: 18px;">Estado</th>
                            <th style="font-size: 18px;">Tiempo</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        <tr>
                            <td>Airi Satou</td>
                            <td>568</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                            <td><strong>ID Pago</strong></td>
                            <td><strong>Estado</strong></td>
                            <td><strong>Tiempo</strong></td>
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
                                <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 25px;color: rgb(38,125,36);">Activa</h1>
            </div>
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
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                            <input class="form-control" type="text" placeholder="Buscar nombre" style="color: rgb(0,0,0);">
                            <button class="btn btn-primary" type="button" style="height: 37px;">
                                <i class="fa fa-search" style="font-size: 18px;"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                <table class="table dataTable my-0" id="dataTable">
                    <thead style="color: #267d24;">
                        <tr>
                            <th style="font-size: 18px;">Nombre usuario</th>
                            <th style="font-size: 18px;">ID Pago</th>
                            <th style="font-size: 18px;">Acción</th>
                            <th style="font-size: 18px;">Tiempo</th>
                            <th style="font-size: 18px;">Vigencia</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        <tr>
                            <td>Airi Satou</td>
                            <td>568</td>
                            <td>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                            <td>26/03/2020</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                            <td>26/03/2020</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-danger btn-estado" role="button" href="#">Eliminar</a>
                            </td>
                            <td>1 mes</td>
                            <td>26/03/2020</td>
                        </tr>
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                            <td><strong>ID Pago</strong></td>
                            <td><strong>Acción</strong></td>
                            <td><strong>Tiempo</strong></td>
                            <td><strong>Vigencia</strong></td>
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
                                </a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
        <hr>
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-4" style="font-size: 25px;color: rgb(38,125,36);">Eliminada</h1>
            </div>
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
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                            <input class="form-control" type="text" placeholder="Buscar nombre" style="color: rgb(0,0,0);">
                            <button class="btn btn-primary" type="button" style="height: 37px;">
                                <i class="fa fa-search" style="font-size: 18px;"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                <table class="table dataTable my-0" id="dataTable">
                    <thead style="color: #267d24;">
                        <tr>
                            <th style="font-size: 18px;">Nombre usuario</th>
                            <th style="font-size: 18px;">ID Pago</th>
                            <th style="font-size: 18px;">Acción</th>
                            <th style="font-size: 18px;">Tiempo</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        <tr>
                            <td>Airi Satou</td>
                            <td>568</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger" role="button" href="#" style="margin-right: 10px;">Eliminar defenitivamente</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger" role="button" href="#" style="margin-right: 10px;">Eliminar defenitivamente</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>456</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="#" style="margin-right: 10px;">Activar</a>
                                <a class="btn btn-danger" role="button" href="#" style="margin-right: 10px;">Eliminar defenitivamente</a>
                            </td>
                            <td>1 mes</td>
                        </tr>
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre usuario</strong>&nbsp;</td>
                            <td><strong>ID Pago</strong></td>
                            <td><strong>Acción</strong></td>
                            <td><strong>Tiempo</strong></td>
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
@endsection