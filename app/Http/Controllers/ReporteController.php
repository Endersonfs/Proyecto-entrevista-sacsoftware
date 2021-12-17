<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PagosExport;
use App\Imports\PagosImport;
use App\Imports\ReclamacionesEnviadaArs;
use App\Imports\Reporte_pago_Ars_import;
use App\Models\vreportepagosarsaceptados;

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
        Excel::import(new PagosImport, $filelabopaes);
        return back()->with('message','Importacion con exito');
    }
    public function reclamacionesEnviadasArsImport(Request $request)
    {
        // inicio de transacciones
        DB::beginTransaction();     
        try
        {
            // agregando archivos excel
            
            $filelabopaes = $request->file('filelabopaes');
            Excel::import(new ReclamacionesEnviadaArs,$filelabopaes);
            
            $filears = $request->file('filears');
            Excel::import(new Reporte_pago_Ars_import,$filears);
            
            DB::commit();//guardado con exito
            return back()->with('done','Importación con éxito ');
        }
        catch(\Exception $e){
            DB::rollback();//no completar
            //throw $e;
            return back()->with('error','Error al cargar archivo '.$e->getMessage());
            
        }
    }
    public function reportePagoARSExcelLista()
    {
        $texto ="";
        $ExcelLista = vreportepagosarsaceptados::paginate(25);
        return view('reporte.pagoarsexcellista',compact(['ExcelLista','texto']));
        // return $ExcelLista;
    }
    public function reportePagoARSExcelBuscarForm(Request $reques)
    {        
        $texto =trim($reques->get("buscadorrpars"));
        $ExcelLista = DB::table('vreporte_pagosars_aceptados')->select('ID_reclamacion_enviada_ars','Nombre','NO_AUTORIZACION','V_UNITARIO','Valor','diferencia')
        ->where('Nombre','LIKE','%'.$texto.'%')
        ->orWhere('NO_AUTORIZACION','LIKE','%'.$texto.'%')
        ->paginate(10);        
        return view('reporte.pagosarasexcelsearch',compact(['ExcelLista','texto']));
        
        //return response()->json($ExcelLista);

    }
}
