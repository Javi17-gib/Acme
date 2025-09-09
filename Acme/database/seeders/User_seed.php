<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Javier',
            'email' => 'Javier@gmail.com',
            'password' =>Hash::make('123'),
            'telefono' =>'6361234567',
            'direccion' => 'calle tal No. 1234',
            'rol' => 'cliente',
            "created_at"=>date('Y-m-d h:m:s')
        ]);

         DB::table('users')->insert([
            'name' => 'Arqui Juve',
            'email' => 'Juve@gmail.com',
            'password' =>Hash::make('1234'),
            'telefono' =>'6361234569',
            'direccion' => 'calle tal No. 1222',
            'rol' => 'arquitecto',
            "created_at"=>date('Y-m-d h:m:s')
        ]);
    }
}
