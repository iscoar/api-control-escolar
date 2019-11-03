<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `states` (`id`, `name`) VALUES
        (1, 'Aguascalientes'),
        (2, 'Baja california'),
        (3, 'Baja california sur'),
        (4, 'Campeche'),
        (5, 'Chiapas'),
        (6, 'Chihuahua'),
        (7, 'Ciudad de México'),
        (8, 'Coahuila'),
        (9, 'Colima'),
        (10, 'Durango'),
        (11, 'Guanajuato'),
        (12, 'Guerrero'),
        (13, 'Hidalgo'),
        (14, 'Jalisco'),
        (15, 'Estado de México'),
        (16, 'Michoacán'),
        (17, 'Morelos'),
        (18, 'Nayarit'),
        (19, 'Nuevo León'),
        (20, 'Oaxaca'),
        (21, 'Puebla'),
        (22, 'Querétaro'),
        (23, 'Quintana Roo'),
        (24, 'San Luis Potosí'),
        (25, 'Sinaloa'),
        (26, 'Sonora'),
        (27, 'Tabasco'),
        (28, 'Tamaulipas'),
        (29, 'Tlaxcala'),
        (30, 'Veracruz'),
        (31, 'Yucatán'),
        (32, 'Zacatecas');";
        
        DB::insert($query);
       
    }
}
