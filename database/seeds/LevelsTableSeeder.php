<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'id' => 1,
            'name' => 'TSU',
            'academic_period' => 'CUATRIMESTRAL',
            'duration' => '6',
            'minimum_score' => '8.00',
            'minimum_attendance' => '80',
            'created_at' => now()
        ]);

        DB::table('levels')->insert([
            'id' => 2,
            'name' => 'LICENCIATURA',
            'academic_period' => 'CUATRIMESTRAL',
            'duration' => '5',
            'minimum_score' => '8.00',
            'minimum_attendance' => '80',
            'created_at' => now()
        ]);
    }
}
