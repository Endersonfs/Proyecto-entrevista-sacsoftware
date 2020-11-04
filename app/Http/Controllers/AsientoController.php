<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
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
    public function lista(){
        $respListaAsiento = Http::get('http://localhost/api-labopaes/listaasiento');
        $listaasiento = $respListaAsiento->json();
        return view('asientos.lista', compact(['listaasiento']));
    }
    public function crear(Request $request)
    {
        
        // $datos=[];
        // $datos['ID_usuarioregistro']=1;
        // $datos['ID_proveedor']= request('proveedores');
        // $datos['ID_catalogocuenta']=request('cuenta');
        // $datos['ID_tiporegistrocontable']=request('tasiento');
        // $datos['Descripcion']=request('comentario');
        // $datos['monto']=request('monto');

        // $response = Http::post('http://localhost/api-labopaes/listaasiento', [
        //     'ID_usuarioregistro'=>1,
        //     'ID_proveedor'=>$request->all('proveedores'),
        //     'ID_catalogocuenta'=>1,
        //     'ID_tiporegistrocontable'=>1,
        //     'tiporegistrocontable'=>2,
        //     'Descripcion'=>"Hola Mundo beta laravel",
        //     'monto'=>205430.95

        // ]);

        $client = new \GuzzleHttp\Client();
        $url = "http://localhost/api-labopaes/listaasiento'";
       
        $myBody['name'] = "Demo";
        $request = $client->post($url,  ['body'=>$myBody]);
        $response = $request->send();
      
        dd($response);
        
        // echo $response->getBody();


        // $convert = json_encode($datos);
        // error_log($response->getBody());
        
        // return redirect('/asientos/lista');
    }
}
