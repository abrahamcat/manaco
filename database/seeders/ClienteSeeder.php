<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        //Insertar resgistros a la tabla

        DB::table('clientes')->insert([
        [
            'nombres' => 'Pedro',
            'apellidos' => 'Perez Lopez',
            'direccion' => 'Av. Siempre Viva 123',
            'celular' => '7088881',
            'nit' => '12345678',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombres' => 'Juana',
            'apellidos' => 'Garcia Flores',
            'direccion' => 'Calle Real 456',
            'celular' => '76432198',
            'nit' => '87654321',
            'created_at' => now(),
            'updated_at' => now(),
        ]

            ]);
    }
}
