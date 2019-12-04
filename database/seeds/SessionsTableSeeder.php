<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            'id' => 1,
            'start_hour' => '16:00',
            'end_hour' => '16:45',
            'created_at' => now()
        ]);
        DB::table('sessions')->insert([
            'id' => 2,
            'start_hour' => '16:45',
            'end_hour' => '17:30',
            'created_at' => now()
        ]);
        DB::table('sessions')->insert([
            'id' => 3,
            'start_hour' => '17:30',
            'end_hour' => '18:15',
            'created_at' => now()
        ]);
        DB::table('sessions')->insert([
            'id' => 4,
            'start_hour' => '18:15',
            'end_hour' => '18:35',
            'created_at' => now()
        ]);
        DB::table('sessions')->insert([
            'id' => 5,
            'start_hour' => '18:35',
            'end_hour' => '19:20',
            'created_at' => now()
        ]);
        DB::table('sessions')->insert([
            'id' => 6,
            'start_hour' => '19:20',
            'end_hour' => '16:45',
            'created_at' => now()
        ]);
    }
}
