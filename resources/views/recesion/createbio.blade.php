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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Formulario de registro</div>
                    </div>
                    <form method="POST" action="/recision/guardar">
                        {{-- seguridad para formulario --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email2">Nombre Completo</label>
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="nombre">  
                                        <small id="emailHelp2" class="form-text text-muted">Paciente a registrar</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="email2">Identificación</label>
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" name="identificacion">  
                                        <small id="emailHelp2" class="form-text text-muted">Cédula o Pasaporte</small>
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
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="proveedores">                                        
                                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted"></small>
                                        <label for="email2">Diagnostico preoperatorio</label>
                                        <div class="input-group mb-3">                                            
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="proveedores">                                        
                                                
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
                                                            <option value="M">{{$i}} mes</option>
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

                                                    {{-- @foreach ($catalogocuenta as $catalogoc)
                                                        <option value="{{$catalogoc['Codigo']}}">{{$catalogoc['Codigo']}} - {{$catalogoc['Descripcion']}} </option>                                       
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
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="smedico">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Tipo Aseguradora</label>
                                        <div class="input-group mb-3">                                            
                                            <select class="form-control" id="exampleFormControlSelect1" name="cuenta">  
                                                <option value="M">Pública</option>
                                                <option value="F">Privada</option>
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
                                        <small id="emailHelp2" class="form-text text-muted">Identificación de seguro</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Centro Médico</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nombre</span>
                                            </div>
                                            <select class="form-control" id="exampleFormControlSelect1" name="cuenta">  
                                                <option value="M">ARS Palic</option>
                                                <option value="F">Decom</option>
                                                    {{-- @foreach ($catalogocuenta as $catalogoc)
                                                        <option value="{{$catalogoc['Codigo']}}">{{$catalogoc['Codigo']}} - {{$catalogoc['Descripcion']}} </option>                                       
                                                    @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Muestras de</label>
                                        <div class="input-group mb-3">                                            
                                            <input type="text" class="form-control" id="exampleFormControlSelect1" name="cuenta">  
                                                
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
                                                    <input type="date" class="form-control" aria-label="Amount (to the nearest dollar)" name="monto">
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
                                                    <input type="date" class="form-control" aria-label="Amount (to the nearest dollar)" name="monto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- final de codigo de fechas --}}
                                <div class="col-md-6 col-lg-12">
                                    <label for="comment">Descripcion Macroscopica</label>
                                    <div class="form-group">                                    
                                        <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar Descripcion Macroscopica"></textarea>
                                        </textarea>
                                    </div>
                                </div>                           
                                <div class="col-md-6 col-lg-12">
                                    <label for="comment">Descripcion Histopatologica</label>
                                    <div class="form-group">                                    
                                        <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar Descripcion Histopatologica"></textarea>
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