@extends('layouts.template')

@section('title','Facturar')
@section('contentpage')

    <div class="content">
        <div class="page-inner">    
            <!-- Customized Card -->
            <div class="page-header">
                <h4 class="page-title">Facturación</a>
                    </li>
                    
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Privado</div>
                            <div class="card-desc">
                               Completar formulario
                            </div>
                            <a href="{{route('facturar.privado')}}">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Siguiente</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-annoucement card-round">
                        <div class="card-body text-center">
                            <div class="card-opening">Asegurado</div>
                            <div class="card-desc">
                                Completar formulario
                            </div>
                            <a href="{{route('facturar.asegurado')}}">
                            <div class="card-detail">
                                <div class="btn btn-light btn-rounded">Siguiente</div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection