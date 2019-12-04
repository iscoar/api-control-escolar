<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MODELADO
        DB::table('schedules')->insert([
            'stg_id' => 20,
            'session_id' => 3,
            'day' => 'MARTES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 20,
            'session_id' => 5,
            'day' => 'MARTES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 20,
            'session_id' => 6,
            'day' => 'MARTES',
            'created_at' => now()
        ]);
        //DESARROLLO
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 1,
            'day' => 'MIÉRCOLES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 2,
            'day' => 'MIÉRCOLES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 3,
            'day' => 'MIÉRCOLES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 3,
            'day' => 'JUEVES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 5,
            'day' => 'VIERNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 6,
            'day' => 'VIERNES',
            'created_at' => now()
        ]);
        //SEGURIDAD
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 1,
            'day' => 'LUNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 1,
            'day' => 'JUEVES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 2,
            'day' => 'JUEVES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 2,
            'day' => 'VIERNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 3,
            'day' => 'VIERNES',
            'created_at' => now()
        ]);
        //TÓPICOS
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 1,
            'day' => 'MARTES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 2,
            'day' => 'MARTES',
            'created_at' => now()
        ]);  
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 1,
            'day' => 'VIERNES',
            'created_at' => now()
        ]);  
        //INTEGRADORA
        DB::table('schedules')->insert([
            'stg_id' => 24,
            'session_id' => 5,
            'day' => 'JUEVES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 24,
            'session_id' => 6,
            'day' => 'JUEVES',
            'created_at' => now()
        ]);
        //INGLÉS
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 5,
            'day' => 'LUNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 6,
            'day' => 'LUNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 5,
            'day' => 'MIÉRCOLES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 6,
            'day' => 'MIÉRCOLES',
            'created_at' => now()
        ]);
        //NEGOCIACIÓN
        DB::table('schedules')->insert([
            'stg_id' => 26,
            'session_id' => 2,
            'day' => 'LUNES',
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 26,
            'session_id' => 3,
            'day' => 'LUNES',
            'created_at' => now()
        ]);
    }
}
