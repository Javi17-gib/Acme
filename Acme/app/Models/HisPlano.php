<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HisPlano extends Model
{
    protected $fillable = [
        'id_plano',
        'version',
        'archivo_anterior',
        'fecha_modificacion',
        'id_user',
    ];
}
