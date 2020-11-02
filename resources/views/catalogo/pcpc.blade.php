@extends('layouts.template')

@section('title','Catalogo Cuenta')
@section('contentpage')

    <div class="content">
        <div class="page-inner">    
            <!-- Customized Card -->
            <div class="page-header">
                <h4 class="page-title">Cuentas por Cobrar</h4>
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
                        <a href="#">Cuentas</a>
                    </li>
                    
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Pasivos a corto plazo</div>
                            <div class="card-desc">
                                Congrats and best wishes for success in your brand new life!
                                I knew that you would do this!
                            </div>
                            <a href="./pcpcd">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Mostrar</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>               
                
            </div>
        </div>
    </div>
@endsection