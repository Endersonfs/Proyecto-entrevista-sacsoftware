@extends('layouts.template')

@section('title','Formulario de Asientos')
@section('contentpage')
{{-- inicio de formulario --}}
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar</h4>
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
                    <a href="#">Inventario</a>
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
                    <form method="POST" action="/inventario/guardar">
                        {{-- seguridad para formulario --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email2">Producto</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="producto">                                        
                                            @foreach ($listaInventario as $inventario)
                                                <option value="{{$inventario['ID_Inventario']}}">{{$inventario['Descripcion']}}</option>                                       
                                            @endforeach
                                        </select>
                                        <small id="emailHelp2" class="form-text text-muted">Catalogo de cuenta a registrar</small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="password">Cantidad</label>
                                        <div class="input-group mb-3">                                            
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="cantidad" placeholder="00">                                            
                                        </div>
                                    </div>                                 
                                </div>
                                
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label>Tipo de registro</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="tregistro">                                        
                                                @foreach ($listaregistroF as $tregistro)
                                                    <option value="{{$tregistro['ID_inventario_tipoRegistro']}}">{{$tregistro['descripcion']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
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