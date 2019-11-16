<?php

use Illuminate\Database\Seeder;

class StudyPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_plans')->insert([
            'id' => 1,
            'career_id' => 2,
            'name' => 'PLAN2016',
            'created_at' => now()
        ]);
    }
}
