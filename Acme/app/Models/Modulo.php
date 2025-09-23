<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable = [
        'id_proyecto',
        'codigo_modulo',
        'nombre_modulo',
    ];
}
