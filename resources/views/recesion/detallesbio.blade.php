@extends('layouts.template')

@section('title','Detalles Biopsia')
@section('contentpage')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Recesión </h4>
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
                                <td style="width: 40%; vertical-align: middle;">Nombre</td>
                                <td>
                                    <p>Jose Manuel Perez</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Cedula</td>
                                <td>
                                    <p>40225896325</p>	
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Numero de contacto</td>
                                <td>
                                    <p>8028978978</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Edad</td>
                                <td>
                                    <p>25</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Sexo</td>
                                <td>
                                    <p>Masculino</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Estado del caso</td>
                                <td>
                                    <span class="text-warning pl-3">En Proceso</span>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Seguro Medico</td>
                                <td>
                                    <p>ARS Palic</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Numero de Afiliado</td>
                                <td>
                                    <p>2345425234234</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Medico tratante</td>
                                <td>
                                    <p>Dr. Suazo</p>	
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Centro Medico</td>
                                <td>
                                    <p>Consultorio</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Tipo de operacion</td>
                                <td>
                                    		{{-- texto --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Muestra de:</td>
                                <td>
                                    <p>Biopsia</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Diagnostico preoperatorio</td>
                                <td>
                                    <p>Verrugas Vulgares</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Fecha de muestra</td>
                                <td>
                                    <p>2021-02-07 20:40:31</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Fecha de recesion</td>
                                <td>
                                    <p>2021-02-07 20:40:31</p>		
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Fecha de entrega</td>
                                <td>
                                    <p>2021-02-07 20:40:31</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Descripcion Macroscopico</td>
                                <td>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>	
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">Descripcion Histopatologico</td>
                                <td>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>	
                                </td>
                            </tr>
                        </tbody></table>
                        <button type="button" class="btn btn-success" id="alert_demo_8">Facturar</button>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Imprimir</button>		
                        <button type="button" class="btn btn-success" id="alert_demo_8">Editar</button>		
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection