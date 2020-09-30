<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    //pagina principal de los proveedores
    public function index(){
        return "proveedores admin";
    }
    //creando proveedores
    public function create(){
        //aqui tenemos que mostrar la vista del formulario
        return "proveedores create";
    }
    //mostrando un proveedor en particular
    public function show($proveedor){
        return "proveedores: $proveedor ";
    }
}
