@extends('layouts.header-footer-administrador')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad activa de herramientas</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                </div>
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center" id="buscadorActivaHerramientas">
                            <input class="form-control" type="text" placeholder="Buscar nombre" style="color: rgb(0,0,0);" id="buscarActivaHerramientas">
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
                            <th style="font-size: 18px;">Nombre del usuario</th>
                            <th style="font-size: 18px;">ID Pago</th>
                            <th style="font-size: 18px;">Fecha de solicitud</th>
                            <th style="font-size: 18px;">Fecha de aprobación</th>
                            <th style="font-size: 18px;">Vigencia</th>
                            <th style="font-size: 18px;">Acción</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        @foreach($herramientas as $herramienta)
                            <tr>
                                <td>{{ $herramienta->usuario->nombre . ' ' . $herramienta->usuario->apellido_paterno . ' ' . $herramienta->usuario->apellido_materno }}</td>
                                <td>{{ $herramienta->id_pago }}</td>
                                <td>{{ $herramienta->fechaSolicitud }}</td>
                                <td>{{ $herramienta->fechaAprobacion }}</td>
                                <td>{{ $herramienta->vigencia }}</td>
                                <td>
                                    <a class="btn btn-danger btn-estado" role="button" href="{{ route('admin.publicidadActiva-remover-herramienta', ['id_pago' => $herramienta->id_pago]) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach   
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre del usuario</strong>&nbsp;</td>
                            <td><strong>ID Pago</strong></td>
                            <td><strong>Fecha de solicitud</strong></td>
                            <td><strong>Fecha de aprobación</strong></td>
                            <td><strong>Vigencia</strong></td>
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
                        {{ $herramientas->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection