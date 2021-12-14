<?php

namespace App\Imports;

use App\Models\ReclamacionesEnviadasArs;
use Maatwebsite\Excel\Concerns\ToModel;

class ReclamacionesEnviadaArs implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ReclamacionesEnviadasArs([
            'Nombre' => $row[0],
            'Nss'  => $row[1],
            'NO_AUTORIZACION'  => $row[2],
            'PROCEDIMIENTO'  => $row[3],
            'V_UNITARIO'  => $row[4],
            'Codigo'  => $row[5]
        ]);
    }
}
