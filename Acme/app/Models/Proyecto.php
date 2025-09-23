<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id_user',
        'id_condominio',
        'nombre_proyecto',
        'descripcion'
    ];
}
