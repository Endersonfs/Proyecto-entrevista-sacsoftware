@extends('layouts.template')

@section('title','Formulario de Asientos')
@section('contentpage')
{{-- inicio de formulario --}}
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Asiento</h4>
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
                    <a href="#">Asiento</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Formulario</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Formulario de registro</div>
                    </div>
                    <form method="POST" action="/asientos/crear">
                        {{-- seguridad para formulario --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email2">Cuenta</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="cuenta">                                        
                                            @foreach ($catalogocuenta as $catalogoc)
                                                <option value="{{$catalogoc['Codigo']}}">{{$catalogoc['Codigo']}} - {{$catalogoc['Descripcion']}} </option>                                       
                                            @endforeach
                                        </select>
                                        <small id="emailHelp2" class="form-text text-muted">Catalogo de cuenta a registrar</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Monto</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="monto">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="col-md-6 col-lg-6">				
                                    <div class="form-group">
                                        <label for="email2">Proveedor</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <select class="form-control" id="exampleFormControlSelect1" name="proveedores">                                        
                                                @foreach ($provedores as $proveedoresAs)
                                                    <option value="{{$proveedoresAs['proveedoresID']}}">{{$proveedoresAs['nombre']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label>Tipo de Asiento</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="tasiento">                                        
                                                @foreach ($tiporegistro as $tregistro)
                                                    <option value="{{$tregistro['ID_tiporegistrocontrable']}}">{{$tregistro['Descripcion']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6 col-lg-12">
                                    <label for="comment">Commentario</label>
                                    <div class="form-group">                                    
                                        <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar comentarios para esta solicitud"></textarea>
                                        </textarea>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Registrar</button>
                            <button class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- final de formulario --}}

@endsection