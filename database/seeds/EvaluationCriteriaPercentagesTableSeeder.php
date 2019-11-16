<?php

use Illuminate\Database\Seeder;
use App\GroupEvaluationLevel;

class EvaluationCriteriaPercentagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gel=GroupEvaluationLevel::all();
        foreach($gel as $g)
        {
            DB::table('evaluation_criteria_percentages')->insert([
                'gel_id' => $g->id,
                'evaluation_criteria_id' => 2,
                'percentage' => 50,
                'created_at' => now()
            ]); 
            DB::table('evaluation_criteria_percentages')->insert([
                'gel_id' => $g->id,
                'evaluation_criteria_id' => 8,
                'percentage' => 30,
                'created_at' => now()
            ]); 
            DB::table('evaluation_criteria_percentages')->insert([
                'gel_id' => $g->id,
                'evaluation_criteria_id' => 4,
                'percentage' => 20,
                'created_at' => now()
            ]); 
        }
    }
}
