<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'id' => 1,
            'name' => 'LUNES'
        ]);
        DB::table('days')->insert([
            'id' => 2,
            'name' => 'MARTES'
        ]);
        DB::table('days')->insert([
            'id' => 3,
            'name' => 'MIÉRCOLES'
        ]);
        DB::table('days')->insert([
            'id' => 4,
            'name' => 'JUEVES'
        ]);
        DB::table('days')->insert([
            'id' => 5,
            'name' => 'VIERNES'
        ]);
        DB::table('days')->insert([
            'id' => 6,
            'name' => 'SÁBADO'
        ]);
    }
}
