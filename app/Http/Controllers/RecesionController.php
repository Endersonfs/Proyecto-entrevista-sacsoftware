<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecesionController extends Controller
{
    //controlador para recesion
    public function index(){}
    public function create(){
        return view('recesion.create');
    }
    public function lista(){
        return view('recesion.lista');
    }
}
