<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

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
}
