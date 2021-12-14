<?php

namespace App\Imports;

use App\Models\ReportepagoARS;
use Maatwebsite\Excel\Concerns\ToModel;

class Reporte_pago_Ars_import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ReportepagoARS([
            'Reclamacion' =>$row[0],
            //'Fecha' =>$row[1],
            'Afiliado' =>$row[1],
            'Contrato' =>$row[2],
            'Plan' =>$row[3],
            'Servicio' =>$row[4],
            'ReclamoOrigen' =>$row[5],
            'Valor' =>$row[6],
            'Codigo' =>$row[7]
        ]);
    }
}
