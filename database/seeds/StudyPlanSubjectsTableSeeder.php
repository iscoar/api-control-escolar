<?php

use Illuminate\Database\Seeder;

class StudyPlanSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_plan_subjects')->insert([
            'id' => 1,
            'student_plan_id' => 1,
            'grade_id' => 1,
            'name' => 'PLAN2016',
            'created_at' => now()
        ]);
    }
}
