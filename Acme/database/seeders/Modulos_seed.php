<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Modulos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modulos')->insert([
            'id_proyecto' => 1,
            'codigo_modulo' => 'ARQ01',
            'nombre_modulo' => 'Diseno Arquitectonico',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
        DB::table('modulos')->insert([
            'id_proyecto' => 2,
            'codigo_modulo' => 'ARQ02',
            'nombre_modulo' => 'Diseno Rural',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
