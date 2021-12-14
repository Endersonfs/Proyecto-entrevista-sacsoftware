<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportepagoARS extends Model
{
    protected $fillable = ['Reclamacion','Afiliado','Contrato','Plan','Servicio','ReclamoOrigen','Valor','Codigo'];
}
