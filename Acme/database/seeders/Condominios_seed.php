<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Condominios_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condominios')->insert([
            'id_zona' => 1,
            'nombre_condominio' => 'Residencia',
            'direccion' => 'calle tal No. 1234',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
         DB::table('condominios')->insert([
            'id_zona' => 2,
            'nombre_condominio' => 'Mansiones',
            'direccion' => 'calle luna No.1234',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
