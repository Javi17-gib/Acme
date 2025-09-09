<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('planos')->insert([
            'id_modulo' => 1,
            'nombre_plano' => 'ARQ1',
            'archivo_plano' => 'ARQ1',
            'version' => 1,
            'id_user' => 1,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
         DB::table('planos')->insert([
            'id_modulo' => 1,
            'nombre_plano' => 'ARQ2',
            'archivo_plano' => 'ARQ2',
            'version' => 2,
            'id_user' => 2,
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
