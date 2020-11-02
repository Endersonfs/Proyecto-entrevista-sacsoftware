<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsientoController extends Controller
{
    //
    public function index (){
        return("asiento.index");
    }
    public function formulario(){
        return("asiento.form");
    }
}
