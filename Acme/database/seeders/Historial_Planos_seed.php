<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Historial_Planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('historial_planos')->insert([
            'id_plano' => 1,
            'version' => 1,
            'archivo_anterior' => 'viejito',
            'version' => 1,
            'fecha_modificacion' => now(),
            'id_user' => 1,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
         DB::table('historial_planos')->insert([
            'id_plano' => 2,
            'version' => 2,
            'archivo_anterior' => 'Nuevo',
            'version' => 2,
            'fecha_modificacion' => now(),
            'id_user' => 2,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
