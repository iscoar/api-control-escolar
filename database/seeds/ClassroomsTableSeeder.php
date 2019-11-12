<?php

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'id' => 1,
            'description' => 'F1',
            'building_id' => 6,
            'created_at' => now()
        ]);

    }
}
