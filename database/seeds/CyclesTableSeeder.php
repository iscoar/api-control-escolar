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
        //INGENIERÍA SEP-DIC18-SEP-DIC19
        DB::table('cycles')->insert([
            'id' => 1,
            'name' => 'SEP-DIC18',
            'level_id' => 2,
            'start_date' => '2018-09-01',
            'end_date'=> '2018-12-12',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 2,
            'name' => 'ENE-ABR19',
            'level_id' => 2,
            'start_date' => '2019-01-03',
            'end_date'=> '2019-04-12',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 3,
            'name' => 'MAY-AGO19',
            'level_id' => 2,
            'start_date' => '2019-05-01',
            'end_date'=> '2019-08-23',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 4,
            'name' => 'SEP-DIC19',
            'level_id' => 2,
            'start_date' => '2019-09-02',
            'end_date'=> '2019-12-13',
            'created_at'=> now()
        ]);
        //TSU SEP-DIC16- MAY-AGO18
        DB::table('cycles')->insert([
            'id' => 5,
            'name' => 'SEP-DIC16',
            'level_id' => 1,
            'start_date' => '2016-09-01',
            'end_date'=> '2016-12-16',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 6,
            'name' => 'ENE-ABR17',
            'level_id' => 1,
            'start_date' => '2017-01-03',
            'end_date'=> '2017-04-20',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 7,
            'name' => 'MAY-AGO17',
            'level_id' => 1,
            'start_date' => '2017-05-01',
            'end_date'=> '2017-08-23',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 8,
            'name' => 'SEP-DIC17',
            'level_id' => 1,
            'start_date' => '2017-09-02',
            'end_date'=> '2017-12-20',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 9,
            'name' => 'ENE-ABR18',
            'level_id' => 1,
            'start_date' => '2018-01-01',
            'end_date'=> '2018-04-20',
            'created_at'=> now()
        ]);
        DB::table('cycles')->insert([
            'id' => 10,
            'name' => 'MAY-AGO18',
            'level_id' => 1,
            'start_date' => '2018-05-01',
            'end_date'=> '2018-08-20',
            'created_at'=> now()
        ]);
    }
}
