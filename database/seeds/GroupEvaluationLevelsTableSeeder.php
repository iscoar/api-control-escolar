<?php

use Illuminate\Database\Seeder;

class GroupEvaluationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGENIERÍA
        //CUATRIMESTRE 1 (1-21)(STG 1-7)
        //STG1
         DB::table('group_evaluation_levels')->insert([
            'id' => 1,
            'stg_id' => 1,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 2,
            'stg_id' => 1,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 3,
            'stg_id' => 1,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG2
        DB::table('group_evaluation_levels')->insert([
            'id' => 4,
            'stg_id' => 2,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 5,
            'stg_id' => 2,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 6,
            'stg_id' => 2,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);     
        //STG3
        DB::table('group_evaluation_levels')->insert([
            'id' => 7,
            'stg_id' => 3,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 8,
            'stg_id' => 3,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 9,
            'stg_id' => 3,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG4
        DB::table('group_evaluation_levels')->insert([
            'id' => 10,
            'stg_id' => 4,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 11,
            'stg_id' => 4,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 12,
            'stg_id' => 4,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG5
        DB::table('group_evaluation_levels')->insert([
            'id' => 13,
            'stg_id' => 5,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 14,
            'stg_id' => 5,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 15,
            'stg_id' => 5,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG6
        DB::table('group_evaluation_levels')->insert([
            'id' => 16,
            'stg_id' => 6,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 17,
            'stg_id' => 6,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 18,
            'stg_id' => 6,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG7
        DB::table('group_evaluation_levels')->insert([
            'id' => 19,
            'stg_id' => 7,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 20,
            'stg_id' => 7,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 21,
            'stg_id' => 7,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);

        //CUATRIMESTRE 2 (22-39)(STG 8-13)
        //STG8
        DB::table('group_evaluation_levels')->insert([
            'id' => 22,
            'stg_id' => 8,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 23,
            'stg_id' => 8,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 24,
            'stg_id' => 8,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG9
        DB::table('group_evaluation_levels')->insert([
            'id' => 25,
            'stg_id' => 9,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 26,
            'stg_id' => 9,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 27,
            'stg_id' => 9,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);    
        //STG10
        DB::table('group_evaluation_levels')->insert([
            'id' => 28,
            'stg_id' => 10,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 29,
            'stg_id' => 10,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 30,
            'stg_id' => 10,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);

        //STG11
        DB::table('group_evaluation_levels')->insert([
            'id' => 31,
            'stg_id' => 11,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 32,
            'stg_id' => 11,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 33,
            'stg_id' => 11,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG12
        DB::table('group_evaluation_levels')->insert([
            'id' => 34,
            'stg_id' => 12,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 35,
            'stg_id' => 12,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 36,
            'stg_id' => 12,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG13
        DB::table('group_evaluation_levels')->insert([
            'id' => 37,
            'stg_id' => 13,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 38,
            'stg_id' => 13,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 39,
            'stg_id' => 13,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]); 

        //CUATRIMESTRE 3 (40-57) (STG 14-19)
        //STG14
        DB::table('group_evaluation_levels')->insert([
            'id' => 40,
            'stg_id' => 14,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 41,
            'stg_id' => 14,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 42,
            'stg_id' => 14,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG15
        DB::table('group_evaluation_levels')->insert([
            'id' => 43,
            'stg_id' => 15,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 44,
            'stg_id' => 15,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 45,
            'stg_id' => 15,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);    
        //STG16
        DB::table('group_evaluation_levels')->insert([
            'id' => 46,
            'stg_id' => 16,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 47,
            'stg_id' => 16,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 48,
            'stg_id' => 16,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG17
        DB::table('group_evaluation_levels')->insert([
            'id' => 49,
            'stg_id' => 17,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 50,
            'stg_id' => 17,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 51,
            'stg_id' => 17,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG18
        DB::table('group_evaluation_levels')->insert([
            'id' => 52,
            'stg_id' => 18,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 53,
            'stg_id' => 18,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 54,
            'stg_id' => 18,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG19
        DB::table('group_evaluation_levels')->insert([
            'id' => 55,
            'stg_id' => 19,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 56,
            'stg_id' => 19,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 57,
            'stg_id' => 19,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]); 

        //CUATRIMESTRE 4 (58-78)(STG 20-25)
        //STG20
        DB::table('group_evaluation_levels')->insert([
            'id' => 58,
            'stg_id' => 20,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 59,
            'stg_id' => 20,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 60,
            'stg_id' => 20,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG21
        DB::table('group_evaluation_levels')->insert([
            'id' => 61,
            'stg_id' => 21,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 62,
            'stg_id' => 21,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 63,
            'stg_id' => 21,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);     
        //STG22
        DB::table('group_evaluation_levels')->insert([
            'id' => 64,
            'stg_id' => 22,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 65,
            'stg_id' => 22,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 66,
            'stg_id' => 22,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG23
        DB::table('group_evaluation_levels')->insert([
            'id' => 67,
            'stg_id' => 23,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 68,
            'stg_id' => 23,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 69,
            'stg_id' => 23,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG24
        DB::table('group_evaluation_levels')->insert([
            'id' => 70,
            'stg_id' => 24,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 71,
            'stg_id' => 24,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 72,
            'stg_id' => 24,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG25
        DB::table('group_evaluation_levels')->insert([
            'id' => 73,
            'stg_id' => 25,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 74,
            'stg_id' => 25,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 75,
            'stg_id' => 25,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);
        //STG26
        DB::table('group_evaluation_levels')->insert([
            'id' => 76,
            'stg_id' => 26,
            'evaluation_level_id' => 1,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 77,
            'stg_id' => 26,
            'evaluation_level_id' => 2,
            'created_at' => now()
        ]);
        DB::table('group_evaluation_levels')->insert([
            'id' => 78,
            'stg_id' => 26,
            'evaluation_level_id' => 3,
            'created_at' => now()
        ]);        
    }
}
