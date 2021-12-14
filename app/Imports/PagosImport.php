<?php

namespace App\Imports;

use App\Models\pagosArsExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class PagosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pagosArsExcel([          
            'nombrePrueba'=>$row[0],
            'precio'=>$row[1],
            'codigo'=>$row[2]
        ]);
    }
}
