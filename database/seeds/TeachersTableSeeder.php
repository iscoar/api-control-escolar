<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('teachers')->insert([
            'id' => '1',
            'user_id' => '11111',
            'professional_id' => '1',
            'scholarship' => 'LICENCIATURA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '2',
            'user_id' => '11112',
            'professional_id' => '2',
            'scholarship' => 'INGENIERÍA',
            'career' => 'SISTEMAS COMPUTACIONALES'
        ]);
        DB::table('teachers')->insert([
            'id' => '3',
            'user_id' => '11113',
            'professional_id' => '3',
            'scholarship' => 'MAESTRÍA',
            'career' => 'ADMINISTRACIÓN DE BASE DE DATOS'
        ]);
        DB::table('teachers')->insert([
            'id' => '4',
            'user_id' => '11114',
            'professional_id' => '4',
            'scholarship' => 'LICENCIATURA',
            'career' => 'ADMINISTRACIÓN DE EMPRESAS'
        ]);
        DB::table('teachers')->insert([
            'id' => '5',
            'user_id' => '11115',
            'professional_id' => '5',
            'scholarship' => 'LICENCIATURA',
            'career' => 'REDES'
        ]);
        DB::table('teachers')->insert([
            'id' => '6',
            'user_id' => '11116',
            'professional_id' => '1',
            'scholarship' => 'INGENIERÍA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '7',
            'user_id' => '11117',
            'professional_id' => '7',
            'scholarship' => 'INGENIERÍA',
            'career' => 'INTELIGENCIA ARTIFICIAL'
        ]);
        DB::table('teachers')->insert([
            'id' => '8',
            'user_id' => '11118',
            'professional_id' => '8',
            'scholarship' => 'LICENCIATURA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '9',
            'user_id' => '11119',
            'professional_id' => '9',
            'scholarship' => 'MAESTRÍA',
            'career' => 'INTERNET DE LAS COSAS'
        ]);
    }
}
