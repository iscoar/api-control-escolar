<?php

use Illuminate\Database\Seeder;

class StudyPlanGradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGENIERÍA CUATRIMESTRES
        DB::table('study_plan_grades')->insert([
            'id' => 1,
            'student_plan_id' => 1,
            'grade_id' => 1,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 2,
            'student_plan_id' => 1,
            'grade_id' => 2,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 3,
            'student_plan_id' => 1,
            'grade_id' => 3,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 4,
            'student_plan_id' => 1,
            'grade_id' => 4,
        ]);
    }
}
