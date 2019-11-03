<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 'R161305933',
            'role' => 'ROLE_STUDENT',
            'name' => 'Alfredo',
            'last_name' => 'Macías',
            'second_last_name' => 'Martínez',
            'gender' => 'Hombre',
            'birthday' => '1998-03-09',
            'nationality' => 'Mexicana',
            'curp' => '',
            'admission_date' => '2019-11-02',
            'insurance' => '',
            'email' => 'alfredomacias@gmail.com',
            'phone' => '4651290412',
            'outdoor_number' => 110,
            'interior_number' => '',
            'street' => 'Luis Sandoval',
            'locality' => '',
            'neighborhood' => 'Col. Pinos',
            'postal_code' => 33000,
            'current_township_id' => '1',
            'birthday_place' => '1',
            'rfc' => '',
            'status' => 'Activo',
            'password' => bcrypt('password'),
        ]);
    }
}
