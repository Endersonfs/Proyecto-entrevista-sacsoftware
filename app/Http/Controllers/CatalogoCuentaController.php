<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoCuentaController extends Controller
{
    //controlador para los catalogos
    public function index(){
    // metodo para el la pagina pricipal
        return view('catalogo.index');
    }
    public function Activos(){
        // metodo para Activos
        return view('catalogo.activos');
    }
    public function Pasivos(){
        //metodo para PASIVOS
        return view('catalogo.pasivos');
    }
    public function Ac(){
        //metodo para ACTIVOS CORRIENTES
        return view('catalogo.ac');

    }
    public function Aceb(){
        //metood para EFECTIVO EN CAJA Y BANCO
        return view('catalogo.aceb');
    }
    public function Af(){
        //metodo para PROPIEDAD PLANTA Y EQUIPOS
        return view('catalogo.af');

    }
    public function Ad(){
        //metodo para ACTIVOS  DIFERIDOS
        return view('catalogo.ad');
    }
    public function Accg(){
        //metodo para Caja General
        return view('catalogo.accg');
    }
    public function Acb(){
        //metodo para Banco
        return view('catalogo.acb');
    }
    public function Accc(){
        //metodo para Banco
        return view('catalogo.accc');
    }
    public function Aci(){
        //metodo para Banco
        return view('catalogo.aci');
    }
    public function Adg(){
        // metodo para GASTOS PAGADOS POR ADELANTADOS
        return view('catalogo.adg');
    }
    public function Adgs(){
        // metodo para GASTOS PAGADOS POR ADELANTADOS
        return view('catalogo.adgs');
    }
    public function Adgc(){
        // metodo para GASTOS PAGADOS POR ADELANTADOS
        return view('catalogo.adgc');
    }
    public function Adgd(){
        // metodo para GASTOS PAGADOS POR ADELANTADOS
        return view('catalogo.adgd');
    }
    public function pc(){
        //metodo para PASIVOS CIRCULANTES
        return view('catalogo.pc');
    }
    public function pcpc(){
        //metodo para PASIVOS A CORTO PLAZO
        return view('catalogo.pcpc');
    }
    public function pcpcd(){
        //metodo para DOCUMENTOS Y CUENTAS POR PAGAR
        return view('catalogo.pcpcd');
    }
    public function pcpcdd(){
        //metodo para DOCUMENTOS Y CUENTAS POR PAGAR
        return view('catalogo.pcpcdd');
    }
    public function pcpcdr(){
        //metodo para RETENCION DE NOMINAS
        return view('catalogo.pcpcdr');
    }
    public function Capital(){
        //metodo para RETENCION DE NOMINAS
        return view('catalogo.capital');
    }
    public function cc(){
        //metodo para RETENCION DE NOMINAS
        return view('catalogo.cc');
    }
    public function ce(){
        //metodo para RETENCION DE NOMINAS
        return view('catalogo.ce');
    }
}
