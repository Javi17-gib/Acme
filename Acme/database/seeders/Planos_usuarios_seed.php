<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planos_usuarios_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plano_usuario')->insert([
            'id_plano' => 1,
            'id_user' => 1,
            'permiso' => 'ver',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
         DB::table('plano_usuario')->insert([
            'id_plano' => 2,
            'id_user' => 2,
            'permiso' => 'editar',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
