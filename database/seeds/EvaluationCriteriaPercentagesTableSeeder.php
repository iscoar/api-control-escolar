<?php

use Illuminate\Database\Seeder;

class EvaluationCriteriaPercentagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGENIERÍA
        //CUATRIMESTRE 1 
        //LEVEL
        DB::table('evaluation_criteria_percentages')->insert([
            'id' => 1,
            'gel_id' => 1,
            'evaluation_criteria_id' => 1,
            'percentage' => 1,
            'created_at' => now()
        ]);
    }
}
