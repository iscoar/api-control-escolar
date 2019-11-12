<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'id' => 1,
            'classroom_id' => 1,
            'grade_id' => 1,
            'description' => 'ITI7B',
            'students_quantity' => 20,
            'status' => 'INACTIVO',
            'created_at' => now()
        ]);
        DB::table('groups')->insert([
            'id' => 2,
            'classroom_id' => 1,
            'grade_id' => 2,
            'description' => 'ITI8B',
            'students_quantity' => 20,
            'status' => 'INACTIVO',
            'created_at' => now()
        ]);
        DB::table('groups')->insert([
            'id' => 3,
            'classroom_id' => 1,
            'grade_id' => 3,
            'description' => 'ITI9B',
            'students_quantity' => 20,
            'status' => 'INACTIVO',
            'created_at' => now()
        ]);
        DB::table('groups')->insert([
            'id' => 4,
            'classroom_id' => 1,
            'grade_id' => 4,
            'description' => 'ITI10B',
            'students_quantity' => 20,
            'status' => 'ACTIVO',
            'created_at' => now()
        ]);
    }
}
