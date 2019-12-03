<?php

use Illuminate\Database\Seeder;
use App\SubjectTeacherGroup;

class GroupEvaluationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stg=SubjectTeacherGroup::all();
        foreach($stg as $s)
        {
            DB::table('group_evaluation_levels')->insert([
                'stg_id' => $s->id,
                'evaluation_level_id' => 1,
                'sessions' => 15,
                'created_at' => now()
            ]);
            DB::table('group_evaluation_levels')->insert([
                'stg_id' => $s->id,
                'evaluation_level_id' => 2,
                'sessions' => 15,
                'created_at' => now()
            ]);
            DB::table('group_evaluation_levels')->insert([
                'stg_id' => $s->id,
                'evaluation_level_id' => 3,
                'sessions' => 15,
                'created_at' => now()
            ]);
        } 
    }
}
