@extends('layouts.header-footer-administrador')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Publicidad pendiente de productos</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                </div>
                <div class="col-md-6">
                    <div class="text-md-right d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-start justify-content-md-end justify-content-lg-end justify-content-xl-end dataTables_filter" id="dataTable_filter">
                        <form class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center" id="buscadorPendienteProductos">
                            <input class="form-control" type="text" placeholder="Buscar" style="color: rgb(0,0,0);" id="buscarPendienteProductos">
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
                            <th style="font-size: 18px;">Nombre del producto</th>
                            <th style="font-size: 18px;">Imagen del producto</th>
                            <th style="font-size: 18px;">Acci??n</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(0,0,0);">
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->usuario->nombre . ' ' . $producto->usuario->apellido_paterno . ' ' . $producto->usuario->apellido_materno }}</td>
                                <td>{{ $producto->id_pago }}</td>
                                <td>{{ $producto->fechaSolicitud }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td class="d-flex justify-content-start">
                                    <img src="{{ route('usuario.producto-imagen', ['filename' => $producto->imagen]) }}" style="width: 150px;">
                                </td>
                                <td>
                                    <a class="btn btn-primary" role="button" href="{{ route('admin.publicidad-activar-producto', ['id_pago' => $producto->id_pago]) }}" style="margin-right: 10px;">Activar</a>
                                    <a class="btn btn-danger btn-estado" role="button" href="{{ route('admin.publicidad-remover-producto', ['id_pago' => $producto->id_pago]) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                    <tfoot style="color: #267d24;">
                        <tr>
                            <td><strong>Nombre del usuario</strong>&nbsp;</td>
                            <td><strong>ID Pago</strong></td>
                            <td><strong>Fecha de solicitud</strong></td>
                            <td><strong>Nombre del producto</strong></td>
                            <td><strong>Imagen del producto</strong></td>
                            <th style="font-size: 18px;">Acci??n</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row" style="font-size: 20px;color: rgb(0,0,0);">
                <div class="col-md-6 align-self-center">
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                        {{ $productos->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection