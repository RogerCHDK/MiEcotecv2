@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Asistentes al evento "{{$evento->nombre}}"</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap"></div>
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter-1">
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
                 @if ($registros===0)
                <table class="table dataTable my-0" id="dataTable">
                    <thead style="color: #267d24;">
                        <tr>
                            <th style="font-size: 18px;">Nombre</th>
                            <th style="font-size: 18px;">Correo electrónico</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        
                            <tr>
                                Aún no hay registros
                            </tr>
                        
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre</strong></td>
                            <td><strong>Correo electrónico</strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                 @else
                <table class="table dataTable my-0" id="dataTable">
                    <thead style="color: #267d24;">
                        <tr>
                            <th style="font-size: 18px;">Nombre</th>
                            <th style="font-size: 18px;">Correo electrónico</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        
                            <tr>
                                @foreach($registros as $registro) 
                                <td>
                                    <img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">{{$registro->usuario->nombre}} {{$registro->usuario->apellido_paterno}}
                                </td>
                                <td>{{$registro->usuario->email}}</td>
                                @endforeach
                            </tr>
                        
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre</strong></td>
                            <td><strong>Correo electrónico</strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                 @endif
                
                
                
            </div>
            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                <div class="col-md-6 align-self-center"></div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                        <!--Links de paginación ->links() -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection