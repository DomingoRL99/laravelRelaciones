<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nota')->insert([
            'asignatura_id' => '1',
            'calificacion' => '6',
            'fecha_examen' => '2023-05-20',
            'convocatoria'=> '4',
            'alumno_id' => '1',
        ]);
        DB::table('nota')->insert([
            'asignatura_id' => '2',
            'calificacion' => '8',
            'fecha_examen' => '2023-03-14',
            'convocatoria'=> '6',
            'alumno_id' => '1',
        ]);
        DB::table('nota')->insert([
            'asignatura_id' => '3',
            'calificacion' => '10',
            'fecha_examen' => '2023-04-30',
            'convocatoria'=> '2',
            'alumno_id' => '1',
        ]);
    }
}
