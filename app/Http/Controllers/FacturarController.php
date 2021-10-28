<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturarController extends Controller
{
    //
    public function index()
    {
        return view('facturar.index');
    }
    public function privado()
    {
        return view('facturar.privado');
    } 
    public function asegurado()
    {
        return view('facturar.asegurado');
    } 
}
