@extends('layouts.template')

@section('title','Recesion')
@section('contentpage')

    <div class="content">
        <div class="page-inner">    
            <!-- Customized Card -->
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
                        <a href="#">Secretariado</a>
                    </li>
                    
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Biopsia</div>
                            <div class="card-desc">
                                Lista de registros de LP
                            </div>
                            <a href="/recision/bio">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Papanicolaou</div>
                            <div class="card-desc">
                                Lista de registros de LCV
                            </div>
                            <a href="./catalogo/pasivos">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Citología</div>
                            <div class="card-desc">
                                Lista de registros de  LCD
                            </div>
                            <a href="./catalogo/capital">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">THIN-PREP</div>
                            <div class="card-desc">
                                Lista de registros de  LPTH
                            </div>
                            <a href="./catalogo/pasivos">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Costo</div>
                            <div class="card-desc">
                                Congrats and best wishes for success in your brand new life!
                                I knew that you would do this!
                            </div>
                            <a href="./catalogo/pasivos">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Gastos</div>
                            <div class="card-desc">
                                Congrats and best wishes for success in your brand new life!
                                I knew that you would do this!
                            </div>
                            <a href="./catalogo/pasivos">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Agregar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
@endsection