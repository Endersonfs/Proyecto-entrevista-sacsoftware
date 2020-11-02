<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class AsientoController extends Controller
{
    //
    //
    public function index(){
        return view("asientos.index");
    }
    public function formulario(){
        $respProveedores = Http::get('http://localhost/api-labopaes/proveedores');
        $respCatalogoCuenta = Http::get('http://localhost/api-labopaes/catalogocuenta');
        $respTipoRegistro = Http::get('http://localhost/api-labopaes/tiporegistro');
        
        $provedores = $respProveedores->json();
        $catalogocuenta = $respCatalogoCuenta->json();
        $tiporegistro = $respTipoRegistro->json();
        
        return view('asientos.formulario',compact(['catalogocuenta','provedores','tiporegistro']));
    }
}
