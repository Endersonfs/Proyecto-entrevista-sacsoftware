@extends('layouts.template')

@section('title','Proeevedores')

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
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="basic-datatables_length"><label>Mostrar<select name="basic-datatables_length" aria-controls="basic-datatables" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatables_filter" class="dataTables_filter"><label>Buscar<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                                    <thead>
                                        {{-- header --}}
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Nombre</th>
                                            <th rowspan="1" colspan="1">Edad</th>
                                            <th rowspan="1" colspan="1">Cedula</th>
                                            <th rowspan="1" colspan="1">Sexo</th>
                                            <th rowspan="1" colspan="1">Telefono</th>
                                            <th rowspan="1" colspan="1">Medico tratante</th>
                                            <th rowspan="1" colspan="1">Centro medico</th>
                                            <th rowspan="1" colspan="1">Esta de Caso</th>
                                            <th rowspan="1" colspan="1">Fecha Registro</th>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($listado as $asiento)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$asiento['nombre']}}</td>                                            
                                            <td>{{$asiento['edad']}}</td>
                                            <td>{{$asiento['Cedula']}}</td>
                                            <td>{{$asiento['sexo']}}</td>
                                            <td>{{$asiento['Telefono']}}</td>
                                            <td>{{$asiento['Medico_Tratante']}}</td>
                                            <td>{{$asiento['Centro_Medico']}}</td>
                                            <td>{{$asiento['Estado']}}</td>
                                            {{-- <td>{{$asiento['Fecha_Registro']}}</td> --}}
                                            <td>
                                                <a href="/recision/{{$asiento['ID_Biopsias']}}" class="btn btn-primary" style="color:#fff ;margin: 2px;padding-left: 27px;">
                                                            <span class="btn-label">
                                                                <i class="fa fa-info"></i>
                                                            </span>
                                                                Detalles
                                                        </a>
                                             </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                     
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="basic-datatables_info" role="status" aria-live="polite">Mostrando 1 a 10 </div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="basic-datatables_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="basic-datatables_previous"><a href="#" aria-controls="basic-datatables" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="basic-datatables_next"><a href="#" aria-controls="basic-datatables" data-dt-idx="7" tabindex="0" class="page-link">Siguiente</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection