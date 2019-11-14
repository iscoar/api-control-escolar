<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationCriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluation_criteria')->insert([
            'id' => 1,
            'name' => 'PARTICIPACIÓN',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 2,
            'name' => 'EXAMEN ESCRITO',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 3,
            'name' => 'PROBLEMARIO',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 4,
            'name' => 'TAREAS',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 5,
            'name' => 'PRÁCTICAS DE LABORATORIO',
            'created_at' => now()
        ]);
        //
        DB::table('evaluation_criteria')->insert([
            'id' => 6,
            'name' => 'EXPOSICIÓN EN EQUIPO',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 7,
            'name' => 'EXPOSICIÓN INDIVIDUAL',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 8,
            'name' => 'PROYECTO',
            'created_at' => now()
        ]);
        DB::table('evaluation_criteria')->insert([
            'id' => 9,
            'name' => 'TRABAJO DE INVESTIGACIÓN',
            'created_at' => now()
        ]);
    }
}
