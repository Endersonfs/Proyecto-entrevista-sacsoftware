@extends('layouts.template')

@section('title','Reportes')
@section('contentpage')
<div class="content">
    <div class="page-inner">    
        <!-- Customized Card -->
        <div class="page-header">
            <h4 class="page-title">Reportes</h4>
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
                    <a href="#">Pagos ARS</a>
                </li>
                
            </ul>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Pagos ARS</div>
                        <div class="card-desc">
                            Aqui podras agregar el listado de todos los pacientes
                            que la aseguradora aprobo sus casos
                        </div>                        
                        <div class="card-detail">
                            <a href="{{route('reporte.pagosarsexcel.form')}}">
                                <div style="margin: 2.5px;" class="btn btn-light btn-rounded">Agregar</div>
                            </a>
                            <a href="{{route('reporte.reclamacionesEnviadas.lista')}}">
                                <div style="margin: 2.5px;" class="btn btn-light btn-rounded">Ver Lista</div>
                            </a>
                        </div>
                                                
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Pasivos</div>
                        <div class="card-desc">
                            Congrats and best wishes for success in your brand new life!
                            I knew that you would do this!
                        </div>
                        <a href="./catalogo/pasivos">
                        <div class="card-detail">
                            <div class="btn btn-light btn-rounded">Mostrar</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Capital</div>
                        <div class="card-desc">
                            Congrats and best wishes for success in your brand new life!
                            I knew that you would do this!
                        </div>
                        <a href="./catalogo/capital">
                        <div class="card-detail">
                            <div class="btn btn-light btn-rounded">Mostrar</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Ingreso</div>
                        <div class="card-desc">
                            Congrats and best wishes for success in your brand new life!
                            I knew that you would do this!
                        </div>
                        <a href="./catalogo/pasivos">
                        <div class="card-detail">
                            <div class="btn btn-light btn-rounded">Mostrar</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Costo</div>
                        <div class="card-desc">
                            Congrats and best wishes for success in your brand new life!
                            I knew that you would do this!
                        </div>
                        <a href="./catalogo/pasivos">
                        <div class="card-detail">
                            <div class="btn btn-light btn-rounded">Mostrar</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                    <div class="card-body text-center">
                        <div class="card-opening">Gastos</div>
                        <div class="card-desc">
                            Congrats and best wishes for success in your brand new life!
                            I knew that you would do this!
                        </div>
                        <a href="./catalogo/pasivos">
                        <div class="card-detail">
                            <div class="btn btn-light btn-rounded">Mostrar</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</div>
@endsection