<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanUsuario extends Model
{
    protected $fillable = [
        'id_plano',
        'id_user',
        'permiso'
    ];
}
