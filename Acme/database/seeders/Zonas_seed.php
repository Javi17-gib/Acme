<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zonas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zonas')->insert([
            'nombre_zona' => 'Zona Norte',
            'descripcion' => 'Buena Ubicacion para pasar agradables momentos en familia',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
        DB::table('zonas')->insert([
            'nombre_zona' => 'Zona Sur',
            'descripcion' => 'Ubicacion Excelente para hacer fiestas',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
        
    }
}
