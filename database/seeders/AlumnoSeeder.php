<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumno')->insert([
            'nombre' => 'Domingo',
            'telefono' => '663432560',
            'edad' => '23',
            'password'=> 'contraseña',
            'email' => 'domingorl1999@gmail.com',
            'sexo' => 'hombre',
        ]);

        DB::table('alumno')->insert([
            'nombre' => 'Lucas',
            'telefono' => '123456789',
            'edad' => '5',
            'password'=> 'contraseña',
            'email' => 'lucas@gmail.com',
            'sexo' => 'hombre',
        ]);
    }
}
