@extends('layouts.template')

@section('title','Pagos ARS Excel - Form')
@section('contentpage')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Reporte</h4>
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
                    <a href="{{route('reporte.pagosarsexcel')}}">Pagos ARS</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Formulario</a>
                </li>
            </ul>
        </div>
        <form method="POST" action="{{route('reporte.reclamacionesEnviadas.import')}}" enctype="multipart/form-data">
        {{-- seguridad para formulario --}}
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <div class="card-title">Formulario Pagos ARS </div>
                            @if (Session::has('message'))
                                {{Session::get('message')}}                                                                    
                             @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    {{-- edad y sexo --}}
                                    
                                    {{-- fin edad y sexo --}}
                                    <div class="form-group">
                                        <label for="password">Reclamación Enviada a la ARS</label>
                                        <div class="form-group">
                                            <small id="emailHelp2" class="form-text text-muted"></small>
                                            <label for="email2">Excel</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><div class="icon-preview"><i class="icon-doc"></i></div></span>
                                                </div>
                                                <input type="file" class="form-control" id="exampleFormControlSelect1" name="filelabopaes" required>  
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-lg-6">
                                    {{-- edad y sexo --}}
                                    
                                    {{-- fin edad y sexo --}}
                                    <div class="form-group">
                                        <label for="password">Reporte de pago de la ARS</label>
                                        <div class="form-group">
                                            <small id="emailHelp2" class="form-text text-muted"></small>
                                            <label for="email2">Excel</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><div class="icon-preview"><i class="icon-doc"></i></div></span>
                                                </div>
                                                <input type="file" class="form-control" id="exampleFormControlSelect1" name="filears" required> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                
                                                         
                                                          
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Registrar</button>
                            <a href="{{route('reporte.pagosarsexcel')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>
{{-- final de formulario --}}
@endsection