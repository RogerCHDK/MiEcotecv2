@extends('layouts.header-footer-administrador')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
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
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($registro as $reg)
                                                <tr>
                                                    <td class="text-justify">{{ $reg->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $reg->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach    
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

                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $registro->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($eventos as $evento)
                                                <tr>
                                                    <td class="text-justify">{{ $evento->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $evento->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach    
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $eventos->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($consejos as $consejo)
                                                <tr>
                                                    <td class="text-justify">{{ $consejo->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $consejo->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $consejos->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($asesores as $asesor)
                                                <tr>
                                                    <td class="text-justify">{{ $asesor->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $asesor->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $asesores->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($productos as $producto)
                                                <tr>
                                                    <td class="text-justify">{{ $producto->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $producto->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $productos->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($servicios as $servicio)
                                                <tr>
                                                    <td class="text-justify">{{ $servicio->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $servicio->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $servicios->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-7">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($publicidad as $pub)
                                                <tr>
                                                    <td class="text-justify">{{ $pub->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $pub->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach   
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $publicidad->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-8">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info" style="font-size: 18px;">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead style="color: #267d24;">
                                            <tr>
                                                <th style="font-size: 18px;width: 90%;">Sugerencia o comentario</th>
                                                <th style="font-size: 18px;width: 10%;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: rgb(0,0,0);">
                                            @foreach($otros as $otro)
                                                <tr>
                                                    <td class="text-justify">{{ $otro->comentario }}</td>
                                                    <td>
                                                        <a class="btn btn-danger" role="button" href="{{ route('admin.eliminar-sug-com', ['id' => $otro->id]) }}">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach    
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
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="font-size: 18px;">
                                            {{ $otros->links() }}
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
