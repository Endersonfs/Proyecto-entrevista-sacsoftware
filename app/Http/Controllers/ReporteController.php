<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PagosExport;
use App\Imports\PagosImport;
use App\Imports\ReclamacionesEnviadaArs;
use App\Imports\Reporte_pago_Ars_import;

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
            return back()->with('message','Importacion con exito');
        }
        catch(\Exception $e){
            DB::rollback();//no completar
            //throw $e;
            return back()->with('message','Error al cargar archivo');
        }
    }
}
