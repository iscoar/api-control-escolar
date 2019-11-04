<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'id' => 1,
            'name' => '1RO',
            'created_at' => now()
        ]);
        DB::table('grades')->insert([
            'id' => 2,
            'name' => '2DO',
            'created_at' => now()
        ]);
        DB::table('grades')->insert([
            'id' => 3,
            'name' => '3RO',
            'created_at' => now()
        ]);
        DB::table('grades')->insert([
            'id' => 4,
            'name' => '4TO',
            'created_at' => now()
        ]);
        DB::table('grades')->insert([
            'id' => 5,
            'name' => '5TO',
            'created_at' => now()
        ]);
        DB::table('grades')->insert([
            'id' => 6,
            'name' => '6TO',
            'created_at' => now()
        ]);
    }
}
