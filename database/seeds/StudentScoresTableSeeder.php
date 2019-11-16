<?php

use Illuminate\Database\Seeder;
use App\EvaluationCriteriaPercentage;
use Illuminate\Support\Arr;

class StudentScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [8,9,10];
        $ecp=EvaluationCriteriaPercentage::all();
        foreach($ecp as $ec)
        {
            DB::table('student_scores')->insert([
                'ecp_id' => $ec->id,
                'student_id' => 'R161306021',
                'score' => Arr::random($array),
                'attendances' => 0,
                'created_at' => now()
            ]); 
            DB::table('student_scores')->insert([
                'ecp_id' => $ec->id,
                'student_id' => 'R161306068',
                'score' => Arr::random($array),
                'attendances' => 0,
                'created_at' => now()
            ]); 
            DB::table('student_scores')->insert([
                'ecp_id' => $ec->id,
                'student_id' => 'R160306165',
                'score' => Arr::random($array),
                'attendances' => 0,
                'created_at' => now()
            ]); 
            DB::table('student_scores')->insert([
                'ecp_id' => $ec->id,
                'student_id' => 'R162506099',
                'score' => Arr::random($array),
                'attendances' => 0,
                'created_at' => now()
            ]); 
            DB::table('student_scores')->insert([
                'ecp_id' => $ec->id,
                'student_id' => 'R161305933',
                'score' => Arr::random($array),
                'attendances' => 0,
                'created_at' => now()
            ]); 
        }
    }
}
