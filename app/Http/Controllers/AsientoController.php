<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Http;
use App\Models\Asiento;

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
    public function lista(){
        $respListaAsiento = Http::get('http://localhost/api-labopaes/listaasiento');
        $listaasiento = $respListaAsiento->json();
        return view('asientos.lista', compact(['listaasiento']));
    }
    public function crear(Request $request)
    {       
        $asiento = new Asiento();

        $asiento -> ID_usuarioregistro = 1;
        $asiento -> ID_proveedor = $request -> proveedores;

        $asiento -> ID_catalogocuenta = $request -> cuenta;
        $asiento -> ID_catalogodecuenta_Salida = $request -> cuenta2;
        
        $asiento -> ID_tiporegistrocontable = $request -> tasiento;

        $asiento -> Descripcion = $request-> comentario;
        $asiento -> monto = $request -> monto;
        $asiento -> save();
          
         return redirect('/asientos/lista');
    }
}
