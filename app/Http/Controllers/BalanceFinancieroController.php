<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class BalanceFinancieroController extends Controller
{
    //controlador para balance financiero
    public function balanceComprobacion()
    {
        $respuesta = Http::get("http://localhost/api-labopaes/balacefinanciero/bcomprobacion");
        $rsTotal = Http::get('http://localhost/api-labopaes/balacefinanciero/bcomprobaciont');
        $total = $rsTotal->json();
        $listado = $respuesta->json();
        return view('balancefinanciero.bcomprobacion',compact(['listado','total']));
    }
}
