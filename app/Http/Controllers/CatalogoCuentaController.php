<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoCuentaController extends Controller
{
    //controlador para los catalogos
    public function index(){
    // metodo para el la pagina pricipal
        return view('catalogo.index');
    }
    public function Activos(){
        // metodo para Activos
        return view('catalogo.activos');
    }
    public function Pasivos(){
        //metodo para PASIVOS
        return view('catalogo.pasivos');
    }
    public function Ac(){
        //metodo para ACTIVOS CORRIENTES
        return view('catalogo.ac');

    }
    public function Aceb(){
        //metood para EFECTIVO EN CAJA Y BANCO
        return view('catalogo.aceb');
    }
    public function Af(){
        //metodo para PROPIEDAD PLANTA Y EQUIPOS
        return view('catalogo.af');

    }
    public function Ad(){
        //metodo para ACTIVOS  DIFERIDOS
        return view('catalogo.ad');
    }
    public function Accg(){
        //metodo para Caja General
        return view('catalogo.accg');
    }
    public function acb(){
        //metodo para Banco
        return view('catalogo.acb');
    }
    public function accc(){
        //metodo para Banco
        return view('catalogo.accc');
    }
    public function aci(){
        //metodo para Banco
        return view('catalogo.aci');
    }
}
