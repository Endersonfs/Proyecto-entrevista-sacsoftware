<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    //
    public function index()
    {
        return "Estamos en el Index";
    }
    public function reportePagoARSExcel()
    {
        return view('reporte.pagoarsexcel');
    }
    public function reportePagoARSExcelForm()
    {
        return view('reporte.pagosarsexcelform');
    }
    public function reportePagoARSExcelImport(Request $request)
    {
        $filelabopaes = $request->file('filelabopaes');
        return view('reporte.pagosarsexcelform');
    }
}
