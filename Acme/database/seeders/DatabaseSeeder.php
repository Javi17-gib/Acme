<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call(User_seed::class);
         $this->call(Zonas_seed::class);
         $this->call(Condominios_seed::class);
         $this->call(Proyectos_seed::class);
         $this->call(Modulos_seed::class);
         $this->call(Planos_seed::class);
         $this->call(Historial_Planos_seed::class);
         $this->call(Planos_usuarios_seed::class);
    }
}
