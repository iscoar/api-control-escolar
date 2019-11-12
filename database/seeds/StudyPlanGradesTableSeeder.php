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
            'study_plan_id' => 1,
            'grade_id' => 1,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 2,
            'study_plan_id' => 1,
            'grade_id' => 2,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 3,
            'study_plan_id' => 1,
            'grade_id' => 3,
        ]);
        DB::table('study_plan_grades')->insert([
            'id' => 4,
            'study_plan_id' => 1,
            'grade_id' => 4,
        ]);
    }
}
