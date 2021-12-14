<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamacionesEnviadasArs extends Model
{
    protected $fillable = ['Nombre','Nss','NO_AUTORIZACION','PROCEDIMIENTO','V_UNITARIO','Codigo'];
}
