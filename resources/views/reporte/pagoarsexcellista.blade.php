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
                            <div class="row row-card-no-pd">
                                <div class="col-sm-6 col-md-4">
                                    <div class="card card-stats card-round">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="icon-big text-center">
                                                        <i class="flaticon-coins text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category">Valor Unitario Labopaes</p>
                                                        <h4 class="card-title">
                                                            <?php
                                                            $a=0;
                                                            foreach($ExcelLista as $listaars)
                                                            {
                                                                $a+=$listaars['V_UNITARIO'];                                                               
                                                            }                                                            
                                                            echo("RD$ ").$a;
                                                            ?>   
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="card card-stats card-round">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="icon-big text-center">
                                                        <i class="flaticon-coins text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category">Valor Unitario ARS</p>
                                                        <h4 class="card-title">
                                                            <?php
                                                            $a=0;
                                                            foreach($ExcelLista as $listaars)
                                                            {
                                                                $a+=$listaars['Valor'];                                                               
                                                            }                                                            
                                                            echo("RD$ ").$a;
                                                            ?>                                                            
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="card card-stats card-round">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="icon-big text-center">
                                                        <i class="flaticon-error text-danger"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category">Diferencia</p>
                                                        <h4 class="card-title">
                                                            <?php
                                                            $a=0;
                                                            foreach($ExcelLista as $listaars)
                                                            {
                                                                $a+=$listaars['diferencia'];                                                               
                                                            }                                                            
                                                            echo("RD$ ").$a;
                                                            ?>  
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6 col-md-3">
                                    <div class="card card-stats card-round">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="icon-big text-center">
                                                        <i class="flaticon-twitter text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category">Followers</p>
                                                        <h4 class="card-title">+45K</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="col-sm-12 col-md-2">
                                                <div class="dataTables_length" id="basic-datatables_length">                                                    
                                                        <div class="input-group-append show">
                                                            <button class="btn btn-primary btn-border dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Descargar</button>
                                                            <div class="dropdown-menu show" x-placement="top-start" style="position: absolute; transform: translate3d(282px, -146px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#">PDF</a>
                                                                <a class="dropdown-item" href="#">Excel</a>
                                                                <a class="dropdown-item" href="#">ARS</a>
                                                                {{-- <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a> --}}
                                                            </div>
                                                        </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <form action="{{route("reporte.reclamacionesEnviadas.buscador")}}" method="POST">
                                                    @csrf
                                                    <input name="buscadorrpars" type="search" class="form-control" placeholder="Buscar..."
                                                        aria-controls="basic-datatables" value="{{$texto}}">
                                                    <button class="btn btn-success">Buscar</button>
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
                                                            <td class="sorting_1">{{ $listaars['Nombre'] }}</td>
                                                            <td>{{ $listaars['NO_AUTORIZACION'] }}</td>
                                                            <td>RD$ {{ $listaars['V_UNITARIO'] }}</td>
                                                            <td>RD$ {{ $listaars['Valor'] }}</td>
                                                            <td>RD$ {{ $listaars['diferencia'] }}</td>                                                           
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="basic-datatables_info" role="status"
                                                aria-live="polite">Mostrando {{ $ExcelLista->firstItem() }} a {{ $ExcelLista->lastItem() }} de {{ $ExcelLista->total() }} registros </div>
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
                                                {{ $ExcelLista->links() }}
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
