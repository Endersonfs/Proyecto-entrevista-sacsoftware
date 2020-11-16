<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Http;

class InventarioController extends Controller
{
    //
    public function index(){
        $respuesta = Http::get('http://localhost/api-labopaes/listainventario');
        $listado = $respuesta->json();
        //vista para la lista
        return view('inventario.index', compact('listado'));
    }
    public function listaregistro(){
        $respuesta = Http::get('http://localhost/api-labopaes/registroinventario');
        $listado = $respuesta->json();
        return view('inventario.listaregistro',compact('listado'));
    }
    public function agregar(){
        $inventario =Http::get('http://localhost/api-labopaes/inventario');
        $tregistro = Http::get('http://localhost/api-labopaes/rinventario');

        $listaInventario = $inventario->json();
        $listaregistroF = $tregistro->json();

        return view('inventario.registro',compact(['listaInventario','listaregistroF']));
    }
    public function guardarRegistro(Request $request){
        try{
            $inventario = new Inventario();           
            $inventario->ID_Inventario = $request->producto;
            $inventario->ID_tipo_invrentarioRegistro = $request->tregistro;
            $inventario->ID_UsuarioRegistrado =1;
            $inventario->Cantidad = $request->cantidad;
            $inventario->save();
        }catch(Exception $e){
            echo '<script language="javascript">alert("Error al guardar");</script>';
        }
        
        return redirect('/inventario/listaregistro');
    }
}
