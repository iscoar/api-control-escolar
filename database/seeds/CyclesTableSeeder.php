<?php

use Illuminate\Database\Seeder;

class CyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
            'id' => 1,
            'level_id' => 2,
            'start_date' => '2018-09-01',
            'end_date'=> '2018-12-12',
            'created_at'=> now()
        //
        ]);
        DB::table('cycles')->insert([
            'id' => 2,
            'level_id' => 2,
            'start_date' => '2019-01-03',
            'end_date'=> '2019-04-12',
            'created_at'=> now()
        //
        ]);
        DB::table('cycles')->insert([
            'id' => 3,
            'level_id' => 2,
            'start_date' => '2019-05-01',
            'end_date'=> '2019-08-23',
            'created_at'=> now()
        //
        ]);
        DB::table('cycles')->insert([
            'id' => 4,
            'level_id' => 2,
            'start_date' => '2019-09-02',
            'end_date'=> '2019-12-13',
            'created_at'=> now()
        //
        ]);
    }
}
