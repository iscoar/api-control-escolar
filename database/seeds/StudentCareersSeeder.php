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
            'start_date' => '2018/08/03',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 1,
            'career_id' => 2,
            'start_date' => '2016/07/30',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 2,
            'career_id' => 1,
            'start_date' => '2018/08/03',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 3,
            'career_id' => 1,
            'start_date' => '2018/08/03',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 4,
            'career_id' => 1,
            'start_date' => '2018/08/03',
            'created_at' => now()
        ]);
        DB::table('student_careers')->insert([
            'student_id' => 5,
            'career_id' => 1,
            'start_date' => '2018/08/03',
            'created_at' => now()
        ]);
    }
}
