@extends('layouts.template')

@section('title', 'Proeevedores')

@section('contentpage')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Recepción</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Ver lista</a>
                    </li>
                    {{-- <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li> --}}
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mis registros</h4>
                        </div>
                        <div class="card-body">
                            {{-- resultado aqui --}}
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="basic-datatables_length">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <form action="{{route("reporte.reclamacionesEnviadas.buscador")}}" method="POST">
                                                    @csrf
                                                    <input name="buscadorrpars" type="search" class="form-control" placeholder="Buscar..."
                                                        aria-controls="basic-datatables" value="{{$texto}}">
                                                    <button class="btn btn-success">Buscar</button>
                                                    <a class="btn btn-danger" href="{{route("reporte.reclamacionesEnviadas.lista")}}">Volver a lista</a>
                                                </form>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="basic-datatables"
                                                class="display table table-striped table-hover dataTable" role="grid"
                                                aria-describedby="basic-datatables_info">
                                                <thead>
                                                    {{-- header --}}
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1">Nombre</th>
                                                        <th rowspan="1" colspan="1">NO_AUTORIZACION</th>
                                                        <th rowspan="1" colspan="1">Valor UNITARIO</th>
                                                        <th rowspan="1" colspan="1">Valor</th>
                                                        <th rowspan="1" colspan="1">Diferencia</th>                                                        
                                                </thead>                                            	
                                                <tbody>
                                                    @foreach ($ExcelLista as $listaars)                                                    
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $listaars->Nombre }}</td>
                                                            <td>{{ $listaars->NO_AUTORIZACION}}</td>
                                                            <td>RD$ {{ $listaars->V_UNITARIO }}</td>
                                                            <td>RD$ {{ $listaars->Valor }}</td>
                                                            <td>RD$ {{ $listaars->diferencia }}</td>                                                           
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="basic-datatables_info" role="status"
                                                aria-live="polite">Mostrando 1 a 10 </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="basic-datatables_paginate">
                                                {{-- <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="basic-datatables_previous"><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Anterior</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="2" tabindex="0"
                                                            class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="3" tabindex="0"
                                                            class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="4" tabindex="0"
                                                            class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="5" tabindex="0"
                                                            class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="basic-datatables" data-dt-idx="6" tabindex="0"
                                                            class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next" id="basic-datatables_next"><a
                                                            href="#" aria-controls="basic-datatables" data-dt-idx="7"
                                                            tabindex="0" class="page-link">Siguiente</a></li>
                                                </ul> --}}
                                                {{-- {{ $ExcelLista->links() }} --}}
                                            </div>
                                        </div>
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
