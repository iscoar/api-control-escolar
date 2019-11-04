<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluation_levels')->insert([
            'id' => 1,
            'name' => 'EVPA1',
            'created_at' => now()
        ]);
        DB::table('evaluation_levels')->insert([
            'id' => 2,
            'name' => 'EVPA2',
            'created_at' => now()
        ]);
        DB::table('evaluation_levels')->insert([
            'id' => 3,
            'name' => 'EVPA3',
            'created_at' => now()
        ]);
        DB::table('evaluation_levels')->insert([
            'id' => 4,
            'name' => 'EXTRAORDINARIO 1',
            'created_at' => now()
        ]);
        DB::table('evaluation_levels')->insert([
            'id' => 5,
            'name' => 'EXTRAORDINARIO 2',
            'created_at' => now()
        ]);
    }
}
