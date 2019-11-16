<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            'id' => 1,
            'name' => 'Edificio A',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 2,
            'name' => 'Edificio B',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 3,
            'name' => 'Edificio C',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 4,
            'name' => 'Edificio D',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 5,
            'name' => 'Edificio E',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 6,
            'name' => 'Edificio F',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 7,
            'name' => 'Rectoría',
            'created_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 8,
            'name' => 'Biblioteca',
            'created_at' => now()
        ]);
    }
}
