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
        return view('recesion.create');
    }
    public function lista(){
        $respuesta = Http::get('http://localhost/api-labopaes/recesion/biopsias');
        $listado = $respuesta->json();
        return view('recesion.lista',compact('listado'));
    }
    public function listaopcion(){        
        return view('recesion.listaopcion');
    }    
    public function crearbio(){        
        return view('recesion.createbio');
    } 
    public function guardarBio(Request $request){        
        $Recesion = new Recesion();
        
        $Recesion->ID_Estado = 2;
        $Recesion->ID_Caso = 1;
        $Recesion->ID_sexo = $request->sexo;
        $Recesion->Nombre = $request->nombre;
        $Recesion->Edad = $request->edad;
        $Recesion->Cedula=$request->identificacion;
        $Recesion->Telefono = $request->telefono;
        $Recesion->Seguro_Medico = $request->smedico;
        $Recesion->No_Afiliado=$request->noafiliado;
        $Recesion->Medico_Tratante=$request->mtratante;

        $Recesion -> save();
        return view('recesion.createbio');
    }   
}
