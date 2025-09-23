<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'id_modulo',
        'nombre_plano',
        'archivo_plano',
        'version',
        'id_user',
    ];
}
