<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Recesion;


class RecesionController extends Controller
{
    //controlador para recesion
    public function index(){}
    public function create(){
        return view('recepcion.create');
    }
    public function lista(){
        $respuesta = Http::get('http://localhost/api-labopaes/recesion/biopsias');
        
        $listado = $respuesta->json();
        return view('recepcion.lista',compact(['listado']));
    }
    public function listaopcion(){        
        return view('recepcion.listaopcion');
    }    
    public function crearbio(){
        $respuesta = Http::get('http://localhost/api-labopaes/proveedores');
        $respuestatop = Http::get('http://localhost/api-labopaes/recesion/toperacion');
        $respuestadatosbio = Http::get('http://localhost/api-labopaes/recesion/datosbiopsias');
        
        $listado = $respuesta->json();
        $listadotop =$respuestatop->json();
        $listadatosbio = $respuestadatosbio->json();
        
        return view('recepcion.createbio',compact(['listado','listadotop','listadatosbio']));
    } 
    public function guardarBio(Request $request){ 
               
        //variables necesarias
        $txt = $request->edad;
        $textfind = "M";
        $resultado = strpos($txt,$textfind);//comprobando que exites la letra
        $text = substr($txt, 0, -1);
        //final de variables necesarias 

        $Recesion = new Recesion();
        
        $Recesion->ID_Estado = 2;
        $Recesion->ID_Caso = 1;
        $Recesion->ID_sexo = $request->sexo;
        $Recesion->Nombre = $request->nombre;
        // almacenando datos de edad y tipo de edad
        if ($resultado  === false) {
            $Recesion->Edad =$request->edad ;
            $Recesion->ID_edadtipo =2; //ano
            
        } else {
            $Recesion->Edad =$text ;
            $Recesion->ID_edadtipo =1; //mes
        }        
        // final de almacenando datos de edad y tipo de edad
        $Recesion->Cedula=$request->identificacion;
        $Recesion->Telefono = $request->telefono;
        $Recesion->ID_SeguroMedico = $request->smedico;
        $Recesion->No_Afiliado=$request->noafiliado;
        $Recesion->Medico_Tratante=$request->mtratante;
        $Recesion->Apellidos=$request->apellido;
        $Recesion->ID_CentroMedico=$request->centroMe;
        $Recesion->ID_tAseguradora = $request->taseguradora;
        $Recesion->ID_tOperacion = $request->toperacion;
        $Recesion->Diagnostico_preoperatorio = $request->dpre;
        $Recesion->Muestra_de = $request->muestrade;
        $Recesion->Fecha_Muestra = $request->fecham;
        $Recesion->Fecha_entrega = $request->fechaentrega;
        $Recesion->Descripcion_Macroscopica = $request->dmacro;
        $Recesion->Diagnosticos_histopatologico = $request->dhist;
        $Recesion->numeroDeCaso = $request->codigoCaso;



        $Recesion -> save();
        return view('recepcion.create');
    }
    public function detallesbio($detalle){   
        $var = $detalle;     
        $respuesta = Http::get('http://localhost/api-labopaes/recesion/biopsiasd?detalle='.$var.'');
        $listado = $respuesta->json();
        return view('recepcion.detallesbio',compact('listado'));
    }   
}
