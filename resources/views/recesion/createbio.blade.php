@extends('layouts.template')

@section('title','Formulario recesion')
@section('contentpage')
{{-- inicio de formulario --}}
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Biopsia</h4>
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
                    <a href="#">Biopsia</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Formulario</a>
                </li>
            </ul>
        </div>
        <form method="POST" action="/recision/guardar">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between;">
                            <div class="card-title">Formulario de registro</div>
                            @foreach ($listadatosbio as $codigoBIo)
                            <div class="card-title">
                                LP - {{$codigoBIo['cantidadBIo']+1}} - 2021
                                {{-- input para almacenar el valor del numero de caso  --}}
                                <input name="codigoCaso" value="{{$codigoBIo['cantidadBIo']+1}}" type="text" class="form-control" id="exampleFormControlSelect1" style="display: none">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                        {{-- seguridad para formulario --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="row row-demo-grid">
                                        <div class="col">
                                                <div class="form-group">
                                                    <label for="email2">Nombre</label>
                                                    <div class="input-group mb-3">                                                        
                                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="nombre">                                                                                                         
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email2">Apellidos</label>
                                                <input type="text" class="form-control" id="exampleFormControlSelect1" name="apellido">                                                     
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row row-demo-grid">                                        
                                            <div class="form-group">
                                                <label for="email2">Nombre Completo</label>
                                                <input type="text" class="form-control" id="exampleFormControlSelect1" name="nombre">  
                                                <small id="emailHelp2" class="form-text text-muted">Paciente a registrar</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="email2">Nombre Completo</label>
                                                <input type="text" class="form-control" id="exampleFormControlSelect1" name="nombre">  
                                                <small id="emailHelp2" class="form-text text-muted">Paciente a registrar</small>                                           
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="email2">Identificación</label>
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" placeholder="Cédula o Pasaporte" name="identificacion">  
                                        {{-- <small id="emailHelp2" class="form-text text-muted">Cédula o Pasaporte</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label for="email2">Teléfono</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">(000) 000 0000</span>
                                            </div>
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="telefono">                                        
                                               
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label for="email2">Médico Tratante</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nombre</span>
                                            </div>
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="mtratante">                                        
                                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label for="email2">Tipo de Operación</label>
                                        <div class="input-group mb-3">                                            
                                            {{-- <input type="text" class="form-control" id="exampleFormControlSelect1" name="toperacion ">                                         --}}
                                            <select class="form-control" id="exampleFormControlSelect1" name="toperacion">
                                                @foreach($listadotop as $listaop)                                                        
                                                        <option value="{{$listaop['ID_toperacion']}}">{{$listaop['Codigo']}} - {{$listaop['Descripcion']}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label for="email2">Diagnostico preoperatorio</label>
                                        <div class="input-group mb-3">                                            
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="dpre">                                        
                                                
                                        </div>
                                    </div>
                                                                     
                                </div>
                                
                                <div class="col-md-6 col-lg-6">
                                    {{-- edad y sexo --}}
                                    <div class="row row-demo-grid">
                                        <div class="col">
                                                <div class="form-group">
                                                    <label for="email2">Edad</label>
                                                    <div class="input-group mb-3">                                                        
                                                        <select class="form-control" id="exampleFormControlSelect1" name="edad">
                                                            @for ($i = 1; $i <=11; $i++)
                                                            <option value="{{$i}}M">{{$i}} mes</option>
                                                            @endfor
                                                            @for($i = 1; $i <=100; $i++)
                                                            <option value="{{$i}}">{{$i}} Año</option>
                                                            @endfor
                                                                                                                        
                                                        </select>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Mes / Año</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email2">Sexo</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="sexo">  
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>

                                                    {{-- @foreach ($listaSMuenta as $listaSM)
                                                        <option value="{{$listaSM['Codigo']}}">{{$listaSM['Codigo']}} - {{$listaSM['Descripcion']}} </option>                                       
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fin edad y sexo --}}
                                    <div class="form-group">
                                        <label for="password">Seguro Médico</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nombre</span>
                                            </div>
                                            {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="smedico"> --}}
                                            <select class="form-control" id="exampleFormControlSelect1" name="smedico">
                                                @foreach ($listado as $listaSM)
                                                    @if ($listaSM['tprest'] =='Aseguradoras') 
                                                        <option value="{{$listaSM['proveedoresID']}}">{{$listaSM['nombre']}}</option>                                       
                                                    @endif    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Tipo Aseguradora</label>
                                        <div class="input-group mb-3">                                            
                                            <select class="form-control" id="exampleFormControlSelect1" name="taseguradora">  
                                                <option value="1">Pública</option>
                                                <option value="2">Privada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">No.Afiliado</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">#</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="noafiliado">
                                            
                                        </div>
                                        {{-- <small id="emailHelp2" class="form-text text-muted">Identificación de seguro</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Centro Médico</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nombre</span>
                                            </div>
                                            <select class="form-control" id="exampleFormControlSelect1" name="centroMe">
                                                @foreach ($listado as $listaCM)
                                                    @if ($listaCM['tprest'] =='Centro Médico') 
                                                        <option value="{{$listaCM['proveedoresID']}}">{{$listaCM['nombre']}}</option>                                       
                                                    @endif    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Muestras de</label>
                                        <div class="input-group mb-3">                                            
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="muestrade">  
                                                
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label>Tipo de Asiento </label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="tasiento">                                        
                                                @foreach ($tiporegistro as $tregistro)
                                                    <option value="{{$tregistro['ID_tiporegistrocontrable']}}">{{$tregistro['Descripcion']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label>Tipo de Asiento </label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="tregistro">                                        
                                                @foreach ($tiporegistro as $tregistro)
                                                    <option value="{{$tregistro['ID_tiporegistrocontrable']}}">{{$tregistro['Descripcion']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    
                                    {{-- <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label>Tipo de Asiento Salida</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="tasiento2">                                        
                                                @foreach ($tiporegistro as $tregistro)
                                                    <option value="{{$tregistro['ID_tiporegistrocontrable']}}">{{$tregistro['Descripcion']}}</option>                                       
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    
                                </div>
                                {{-- fechas  --}}
                                <div class="col-md-6 col-lg-12">
                                    <div class="row row-demo-grid">
                                        <div class="col">
                                            {{-- fecha de muestra --}}
                                            <div class="form-group">
                                                <label for="email2">Fecha de Muestra</label>
                                                <div class="input-group mb-3">                                                        
                                                    <input type="date" class="form-control" aria-label="Amount (to the nearest dollar)" name="fecham">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col">
                                            {{-- fecha de recepcion --
                                            <div class="form-group">
                                                <label for="email2">Fecha de Recepcion</label>
                                                <div class="input-group mb-3">                                                        
                                                    <input type="date" class="form-control" aria-label="Amount (to the nearest dollar)" name="monto">
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col">
                                            {{-- fecha de entrega --}}
                                            <div class="form-group">
                                                <label for="email2">fecha de Entrega</label>
                                                <div class="input-group mb-3">                                                        
                                                    <input type="date" class="form-control" aria-label="Amount (to the nearest dollar)" name="fechaentrega">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- final de codigo de fechas --}}
                                <div class="col-md-6 col-lg-12">
                                    <label for="comment">Descripcion Macroscopica</label>
                                    <div class="form-group">                                    
                                        <textarea name="dmacro" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar Descripcion Macroscopica"></textarea>
                                        </textarea>
                                    </div>
                                </div>                           
                                <div class="col-md-6 col-lg-12">
                                    <label for="comment">Descripcion Histopatologica</label>
                                    <div class="form-group">                                    
                                        <textarea name="dhist" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar Descripcion Histopatologica"></textarea>
                                        </textarea>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Registrar</button>
                            <a href="/recision/crear" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>
{{-- final de formulario --}}

@endsection