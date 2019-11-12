<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'id' => 1,
            'name' => 'TECNOLOGÍAS DE LA INFORMACIÓN',
            'level_id' => '2',
            'turn' => 'VESPERTINO',
            'acronym' => 'ITI',
        ]);

        DB::table('careers')->insert([
            'id' => 2,
            'name' => 'TECNOLOGÍAS DE LA INFORMACIÓN ÁREA DESARROLLO SOFTWARE MULTIPLATAFORMA',
            'level_id' => '1',
            'turn' => 'MATUTINO',
            'acronym' => 'TIDSM',
        ]);
        
    }
}
