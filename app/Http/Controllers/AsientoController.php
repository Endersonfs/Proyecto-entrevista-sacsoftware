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
        //****codigo anterior */
        // $asiento = new Asiento();

        // $asiento -> ID_usuarioregistro = 1;
        // $asiento -> ID_proveedor = $request -> proveedores;

        // $asiento -> ID_catalogocuenta = $request -> cuenta;
        // $asiento -> ID_catalogodecuenta_Salida = $request -> cuenta2;
        
        // $asiento -> ID_tiporegistrocontable = 1;
        // $asiento -> ID_tiporegistrocontable_Salida = 2;

        // $asiento -> Descripcion = $request-> comentario;
        // $asiento -> monto = $request -> monto;
        // $asiento -> monto2 = $request -> monto2;
        // $asiento -> save();
        /**final del codigo anterior */

        $provedores = $request -> proveedores;
        $cuenta1 = $request -> cuenta;
        $cuenta2 = $request -> cuenta2;
        $descripcion = $request-> comentario;
        $monto1 = $request-> monto;
        $monto2 = $request-> monto2;


        $this->primeraPartida($provedores,$cuenta1,$descripcion,$monto1);
        $this->segundaPartida($provedores,$cuenta2,$monto2);

          
         return redirect('/asientos/lista');
    }
        
    // funcion para almacenar el los asiento de doble partida
    public function primeraPartida($proveedoresf,$cuentaf,$descripcionf,$montof){
        $asiento = new Asiento();

        $asiento -> ID_usuarioregistro = 1;
        $asiento -> ID_proveedor =  $proveedoresf;

        $asiento -> ID_catalogocuenta =  $cuentaf;
        
        $asiento -> ID_tiporegistrocontable = 1;

        $asiento -> Descripcion =  $descripcionf;
        $asiento -> monto =  $montof;
        $asiento -> save();
    }
    public function segundaPartida($proveedoresf,$cuenta2f,$monto2f){
        $asiento = new Asiento();

        $asiento -> ID_usuarioregistro = 1;
        $asiento -> ID_proveedor = $proveedoresf;

        $asiento -> ID_catalogocuenta =  $cuenta2f;

        $asiento -> ID_tiporegistrocontable = 2;

        $asiento -> monto = $monto2f;
        $asiento -> save();
    }
    
}
