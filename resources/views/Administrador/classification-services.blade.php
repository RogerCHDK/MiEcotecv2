@extends('layouts.header-footer-administrador')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Clasificación de servicios</p>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" role="button" style="margin-bottom: 20px;" href="{{ route('admin.crear-servicio') }}">Agregar clasificación</a>
            <div class="row">
                <div class="col-md-6 text-nowrap">
                </div>
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center" id="buscadorClasificacionServicio">
                            <input class="form-control" type="text" placeholder="Buscar nombre" style="color: rgb(0,0,0);" id="buscarClasificacionServicio">
                            <button class="btn btn-primary" type="submit" style="height: 37px;">
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
                            <th style="font-size: 18px;">ID</th>
                            <th style="font-size: 18px;">Clasificación</th>
                            <th style="font-size: 18px;">Acción</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        @foreach($catalogoServicios as $catalogoServicio)
                            <tr>
                                <td>{{ $catalogoServicio->id }}</td>
                                <td>{{ $catalogoServicio->nombre }}</td>
                                <td>
                                    <a class="btn btn-primary" role="button" href="{{ route('admin.modificar-servicio', ['id' => $catalogoServicio->id]) }}" style="margin-right: 10px;">Modificar</a>
                                    <a class="btn btn-danger btn-entorno" role="button" href="{{ route('admin.eliminar-servicio', ['id' => $catalogoServicio->id]) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>ID</strong></td>
                            <td><strong>Clasificación</strong>&nbsp;</td>
                            <td><strong>Acción</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                <div class="col-md-6 align-self-center">
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                        {{ $catalogoServicios->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection