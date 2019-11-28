<?php

use Illuminate\Database\Seeder;

class StudentCareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_careers')->insert([
            'student_id' => 1,
            'career_id' => 1,
            'start_cycle_id' => 1,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 1,
            'career_id' => 2,
            'start_cycle_id' => 5,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 2,
            'career_id' => 1,
            'start_cycle_id' => 1,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 3,
            'career_id' => 1,
            'start_cycle_id' => 1,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 4,
            'career_id' => 1,
            'start_cycle_id' => 1,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 5,
            'career_id' => 1,
            'start_cycle_id' => 1,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
    }
}
