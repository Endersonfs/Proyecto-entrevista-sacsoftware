@extends('layouts.template')

@section('title','Detalles Biopsia')
@section('contentpage')
@foreach ($listado as $bio)
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Recepción </h4>
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
                    <a href="#">Detalles</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detalles</div>
                        <div class="card-category">Informacion completa del caso seleccionado</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Nombre</td>
                                <td>
                                    
                                    <p>{{$bio['nombre']}}</p>
                                    		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Cedula</td>
                                <td>
                                    <p>{{$bio['Cedula']}}</p>	
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Numero de contacto</td>
                                <td>
                                    <p>{{$bio['Telefono']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Edad</td>
                                <td>
                                    <p>{{$bio['edad']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Sexo</td>
                                <td>
                                    <p>{{$bio['sexo']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Estado del caso</td>
                                <td>
                                    @switch($bio['Estado'])                                                
                                                    @case("Completado")
                                                        <span style="background: #21CB0C;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                                {{$bio['Estado']}}
                                                        </span>
                                                        @break
                                                    @case("En Proceso")
                                                        <span style="background: #F5B823;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                                {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @case("Revisión")
                                                        <span style="background: #8C0CCB;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                            {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @case("Eliminado")
                                                        <span style="background: #CB320C;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                            {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @case("Cancelado")
                                                        <span style="background: #CB320C;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                            {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @case("Autorizado")
                                                        <span style="background: #15EAEF;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                            {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @case("Facturando")
                                                        <span style="background: #000;padding: 5px 4px 5px 3px;border-radius: 3px;color: #fff;text-align: center;">
                                                            {{$bio['Estado']}}
                                                        </span>
                                                         @break
                                                    @default
                                                            {{-- Es el código que se ejecutará si no era ninguno de los estados anteriores. --}}
                                                @endswitch 
                                    {{-- @if($bio['Estado'] == 'Completado')
                                        <span class="text-success">{{$bio['Estado']}}</span>
                                    @else
                                        <span class="text-warning">{{$bio['Estado']}}</span>
                                    @endif		 --}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Seguro Medico</td>
                                <td>
                                    <p>{{$bio['Seguro_Medico']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Numero de Afiliado</td>
                                <td>
                                    <p>{{$bio['No_Afiliado']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Medico tratante</td>
                                <td>
                                    <p>{{$bio['Medico_Tratante']}}</p>	
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Centro Medico</td>
                                <td>
                                    <p>{{$bio['Centro_Medico']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Tipo de operacion</td>
                                <td>
                                    <p>{{$bio['tipo_Operacion']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Muestra de:</td>
                                <td>
                                    <p>{{$bio['Muestra_de']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Diagnostico preoperatorio</td>
                                <td>
                                    <p>{{$bio['Diagnostico_preoperatorio']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Fecha de muestra</td>
                                <td>
                                    <p>{{$bio['Fecha_Muestra']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Fecha de recesion</td>
                                <td>
                                    <p>{{$bio['Diagnostico_preoperatorio']}}</p>		
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Fecha de entrega</td>
                                <td>
                                    <p>{{$bio['Fecha_entrega']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Descripcion Macroscopico</td>
                                <td>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>	
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold mb-1" style="width: 40%; vertical-align: middle;">Descripcion Histopatologico</td>
                                <td>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>	
                                </td>
                            </tr>
                        </tbody></table>
                        <a class="btn btn-success" id="alert_demo_8" href="{{route('facturar.index')}}">Facturar</a>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Enviar a Revisión</button>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Imprimir</button>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Imprimir</button>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Editar</button>		
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection