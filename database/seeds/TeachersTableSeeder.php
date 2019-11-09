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
            'scolarship' => 'LICENCIATURA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '2',
            'user_id' => '11112',
            'professional_id' => '2',
            'scolarship' => 'INGENIERÍA',
            'career' => 'SISTEMAS COMPUTACIONALES'
        ]);
        DB::table('teachers')->insert([
            'id' => '3',
            'user_id' => '11113',
            'professional_id' => '3',
            'scolarship' => 'MAESTRÍA',
            'career' => 'ADMINISTRACIÓN DE BASE DE DATOS'
        ]);
        DB::table('teachers')->insert([
            'id' => '4',
            'user_id' => '11114',
            'professional_id' => '4',
            'scolarship' => 'LICENCIATURA',
            'career' => 'ADMINISTRACIÓN DE EMPRESAS'
        ]);
        DB::table('teachers')->insert([
            'id' => '5',
            'user_id' => '11115',
            'professional_id' => '5',
            'scolarship' => 'LICENCIATURA',
            'career' => 'REDES'
        ]);
        DB::table('teachers')->insert([
            'id' => '6',
            'user_id' => '11116',
            'professional_id' => '1',
            'scolarship' => 'INGENIERÍA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '7',
            'user_id' => '11117',
            'professional_id' => '7',
            'scolarship' => 'INGENIERÍA',
            'career' => 'INTELIGENCIA ARTIFICIAL'
        ]);
        DB::table('teachers')->insert([
            'id' => '8',
            'user_id' => '11118',
            'professional_id' => '8',
            'scolarship' => 'LICENCIATURA',
            'career' => 'TECNOLOGÍAS DE LA INFORMACIÓN'
        ]);
        DB::table('teachers')->insert([
            'id' => '9',
            'user_id' => '11119',
            'professional_id' => '9',
            'scolarship' => 'MAESTRÍA',
            'career' => 'INTERNET DE LAS COSAS'
        ]);
    }
}
