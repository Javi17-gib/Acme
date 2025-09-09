<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Proyectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            'id_user' => 1,
            'id_condominio' => 1,
            'nombre_proyecto' => 'Residencia JV',
            'descripcion' => 'Residencia Lujusa con 8 habitaciones',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
        DB::table('proyectos')->insert([
            'id_user' => 1,
            'id_condominio' => 2,
            'nombre_proyecto' => 'Residencia HE',
            'descripcion' => 'Residencia Lujusa con 12 habitaciones y Alberca',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
