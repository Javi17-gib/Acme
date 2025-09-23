<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $fillable = [
        'id_zona',
        'nombre_condominio',
        'direccion'
    ];
}
