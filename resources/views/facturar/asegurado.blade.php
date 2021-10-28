@extends('layouts.template')

@section('title','Facturar')
@section('contentpage')

    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Facturar</h4>
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
                        <a href="#">Asegurados</a>
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
                            <h4 class="card-title">Formulario para facturar</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="basic-datatables_length"><label>Mostrar<select name="basic-datatables_length" aria-controls="basic-datatables" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatables_filter" class="dataTables_filter"><label>Buscar<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                                    <thead>
                                        {{-- header --}}
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Nombre del producto</th>
                                            <th rowspan="1" colspan="1">Cantidad</th>
                                            <th rowspan="1" colspan="1">Tipo registro</th>
                                    </thead>
                                    
                                    <tbody>
                                       
                                        
                                    </tbody>
                                     
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="basic-datatables_info" role="status" aria-live="polite">Mostrando 1 a 10 </div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="basic-datatables_paginate"></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

@endsection