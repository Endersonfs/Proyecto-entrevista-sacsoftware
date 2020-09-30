<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    //pagina principal de los proveedores
    public function index(){
        return view('proveedores.index');
    }
    //creando proveedores
    public function create(){
        //aqui tenemos que mostrar la vista del formulario
        return view('proveedores.create');
    }
    //mostrando un proveedor en particular
    public function show($proveedor){
        
        return view('proveedores.show', compact('proveedor'));
    }
}
