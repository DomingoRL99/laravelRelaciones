<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignatura')->insert([
            'nombre' => 'Matematicas',
        ]);

        DB::table('asignatura')->insert([
            'nombre' => 'Historia',
        ]);

        DB::table('asignatura')->insert([
            'nombre' => 'Literatura',
        ]);
    }
}
