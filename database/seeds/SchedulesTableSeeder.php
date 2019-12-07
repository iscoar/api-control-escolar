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
            'day' => 2,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 20,
            'session_id' => 5,
            'day' => 2,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 20,
            'session_id' => 6,
            'day' => 2,
            'created_at' => now()
        ]);
        //DESARROLLO
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 1,
            'day' => 3,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 2,
            'day' => 3,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 3,
            'day' => 3,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 3,
            'day' => 4,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 5,
            'day' => 5,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 21,
            'session_id' => 6,
            'day' => 5,
            'created_at' => now()
        ]);
        //SEGURIDAD
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 1,
            'day' => 1,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 1,
            'day' => 4,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 2,
            'day' => 4,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 2,
            'day' => 5,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 22,
            'session_id' => 3,
            'day' => 5,
            'created_at' => now()
        ]);
        //TÓPICOS
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 1,
            'day' => 2,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 2,
            'day' => 2,
            'created_at' => now()
        ]);  
        DB::table('schedules')->insert([
            'stg_id' => 23,
            'session_id' => 1,
            'day' => 5,
            'created_at' => now()
        ]);  
        //INTEGRADORA
        DB::table('schedules')->insert([
            'stg_id' => 24,
            'session_id' => 5,
            'day' => 4,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 24,
            'session_id' => 6,
            'day' => 4,
            'created_at' => now()
        ]);
        //INGLÉS
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 5,
            'day' => 1,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 6,
            'day' => 1,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 5,
            'day' => 3,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 25,
            'session_id' => 6,
            'day' => 3,
            'created_at' => now()
        ]);
        //NEGOCIACIÓN
        DB::table('schedules')->insert([
            'stg_id' => 26,
            'session_id' => 2,
            'day' => 1,
            'created_at' => now()
        ]);
        DB::table('schedules')->insert([
            'stg_id' => 26,
            'session_id' => 3,
            'day' => 1,
            'created_at' => now()
        ]);
    }
}
