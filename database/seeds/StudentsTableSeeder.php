<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => 1,
            'user_id' => 'R161306021',
            'egetsu_rating' => '1196',
            'status'=> 'ACTIVO',
            'career_id'=> '1',
            'created_at'=> now()
        //
        ]);
        DB::table('students')->insert([
            'id' => 2,
            'user_id' => 'R161306068',
            'egetsu_rating' => '1214',
            'status'=> 'ACTIVO',
            'career_id'=> '1',
            'created_at'=> now()
        //
        ]);
        DB::table('students')->insert([
            'id' => 3,
            'user_id' => 'R160306165',
            'egetsu_rating' => '1206',
            'status'=> 'ACTIVO',
            'career_id'=> '1',
            'created_at'=> now()
        //
        ]);
        DB::table('students')->insert([
            'id' => 4,
            'user_id' => 'R162506099',
            'egetsu_rating' => '1154',
            'status'=> 'ACTIVO',
            'career_id'=> '1',
            'created_at'=> now()
        //
        ]);
        DB::table('students')->insert([
            'id' => 5,
            'user_id' => 'R161305933',
            'egetsu_rating' => '1184',
            'status'=> 'ACTIVO',
            'career_id'=> '1',
            'created_at'=> now()
        //
        ]);
        //
    }
}
