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
        //Alumno
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
         //Alumno
         DB::table('users')->insert([
            'id' => 'R161315426',
            'role' => 'ROLE_STUDENT',
            'name' => 'LEAH',
            'last_name' => 'CARREÓN',
            'second_last_name' => 'VILLALOBOS',
            'gender' => 'MUJER',
            'birthday' => '1998-05-20',
            'nationality' => 'MEXICANA',
            'curp' => '',
            'admission_date' => '2019-08-30',
            'insurance' => '',
            'email' => 'LEAHCARRE@GMAIL.COM',
            'phone' => '4491238752',
            'outdoor_number' => 430,
            'interior_number' => '',
            'street' => 'REAL DE AGUASCALIENTES',
            'locality' => '',
            'neighborhood' => 'COL. CENTRO',
            'postal_code' => 20150,
            'current_township_id' => '2429',
            'birthday_place' => '1',
            'rfc' => '',
            'status' => 'ACTIVO',
            'password' => bcrypt('PASSWORD'),
        ]);
         //Alumno
         DB::table('users')->insert([
            'id' => 'R161364875',
            'role' => 'ROLE_STUDENT',
            'name' => 'EDGAR',
            'last_name' => 'ZACARÍAS',
            'second_last_name' => 'NIETO',
            'gender' => 'HOMBRE',
            'birthday' => '1998-12-12',
            'nationality' => 'MEXICANA',
            'curp' => '',
            'admission_date' => '2019-08-20',
            'insurance' => '',
            'email' => 'EDGARZACARI@GMAIL.COM',
            'phone' => '4961257866',
            'outdoor_number' => 110,
            'interior_number' => '',
            'street' => 'IGNACIO ALLENDE',
            'locality' => '',
            'neighborhood' => 'COL. MINERA',
            'postal_code' => 33000,
            'current_township_id' => '2430',
            'birthday_place' => '32',
            'rfc' => '',
            'status' => 'ACTIVO',
            'password' => bcrypt('PASSWORD'),
        ]);
//Alumno
         DB::table('users')->insert([
            'id' => 'R161364875',
            'role' => 'ROLE_STUDENT',
            'name' => 'EDGAR',
            'last_name' => 'ZACARÍAS',
            'second_last_name' => 'NIETO',
            'gender' => 'HOMBRE',
            'birthday' => '1998-12-12',
            'nationality' => 'MEXICANA',
            'curp' => '',
            'admission_date' => '2019-08-20',
            'insurance' => '',
            'email' => 'EDGARZACARI@GMAIL.COM',
            'phone' => '4961257866',
            'outdoor_number' => 110,
            'interior_number' => '',
            'street' => 'IGNACIO ALLENDE',
            'locality' => '',
            'neighborhood' => 'COL. MINERA',
            'postal_code' => 33000,
            'current_township_id' => '2430',
            'birthday_place' => '32',
            'rfc' => '',
            'status' => 'ACTIVO',
            'password' => bcrypt('PASSWORD'),
        ]);
        //Alumno
        DB::table('users')->insert([
            'id' => 'R161324168',
            'role' => 'ROLE_STUDENT',
            'name' => 'CARLOS',
            'last_name' => 'AMADOR',
            'second_last_name' => 'CAÑADA',
            'gender' => 'HOMBRE',
            'birthday' => '1998-02-14',
            'nationality' => 'MEXICANA',
            'curp' => '',
            'admission_date' => '2019-08-19',
            'insurance' => '',
            'email' => 'CARLOSAMA@GMAIL.COM',
            'phone' => '4961485784',
            'outdoor_number' => 150,
            'interior_number' => '',
            'street' => 'TORRES QUINTERO',
            'locality' => '',
            'neighborhood' => 'COL. ARENAS',
            'postal_code' => 34000,
            'current_township_id' => '2',
            'birthday_place' => '1',
            'rfc' => '',
            'status' => 'ACTIVO',
            'password' => bcrypt('PASSWORD'),
        ]);
    }
}
