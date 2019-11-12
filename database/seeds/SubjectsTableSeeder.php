<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SEP-DIC16
        DB::table('subjects')->insert([
            'id' => 1,
            'name' => 'DESARROLLO DE HABILIDADES DE PENSAMIENTO LÓGICO',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 2,
            'name' => 'OFIMÁTICA',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 3,
            'name' => 'SOPORTE TÉCNICO',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 4,
            'name' => 'METODOLOGÍA DE LA PROGRAMACIÓN',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 5,
            'name' => 'FUNDAMENTO DE REDES',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 6,
            'name' => 'INGLÉS I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 7,
            'name' => 'EXPRESIÓN ORAL Y ESCRITA I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 8,
            'name' => 'FORMACIÓN SOCIOCULTURAL I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 9,
            'name' => 'ACTIVIDADES CULTURALES Y DEPORTIVAS I',
            'created_at' => now()
        ]);
        //ENE-ABR17
        DB::table('subjects')->insert([
            'id' => 10,
            'name' => 'DESARROLLO DE HABILIDADES DEL PENSAMIENTO MATEMÁTICO',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 11,
            'name' => 'PROGRAMACIÓN',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 12,
            'name' => 'BASE DE DATOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 13,
            'name' => 'INTRODUCCIÓN AL ANÁLISIS Y DISEÑO DE SISTEMAS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 14,
            'name' => 'REDES DE ÁREA LOCAL',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 15,
            'name' => 'INGLÉS II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 16,
            'name' => 'FORMACIÓN SOCIOCULTURAL II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 17,
            'name' => 'ACTIVIDADES CULTURALES Y DEPORTIVAS II',
            'created_at' => now()
        ]);
        //MAY-AGO17
        DB::table('subjects')->insert([
            'id' => 18,
            'name' => 'ADMINISTRACIÓN DE LA FUNCIÓN INFORMÁTICA',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 19,
            'name' => 'DESARROLLO DE APLICACIONES I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 20,
            'name' => 'SISTEMAS OPERATIVOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 21,
            'name' => 'INTEGRADORA I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 22,
            'name' => 'DESARROLLO DE APLICACIONES WEB',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 23,
            'name' => 'BASE DE DATOS II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 24,
            'name' => 'INGLÉS III',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 25,
            'name' => 'FORMACIÓN SOCIOCULTURAL III',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 26,
            'name' => 'ACTIVIDADES CULTURALES Y DEPORTIVAS',
            'created_at' => now()
        ]);
        //SEP-DIC17
        DB::table('subjects')->insert([
            'id' => 27,
            'name' => 'DESARROLLO DE APLICACIONES II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 28,
            'name' => 'ADMINISTRACIÓN DE BASE DE DATOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 29,
            'name' => 'INGENIERÍA DE SOFTWARE I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 30,
            'name' => 'ESTRUCTURA DE DATOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 31,
            'name' => 'INGLÉS IV',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 32,
            'name' => 'FORMACIÓN SOCIOCULTURAL IV',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 33,
            'name' => 'EMPRENDIMIENTO IV',
            'created_at' => now()
        ]);
        //ENE-ABR18
        DB::table('subjects')->insert([
            'id' => 34,
            'name' => 'ADMINISTRACIÓN DE PROYECTOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 35,
            'name' => 'DESARROLLO DE APLICACIONES III',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 36,
            'name' => 'INGENIERÍA DE SOFTWARE II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 37,
            'name' => 'CALIDAD EN EL DESARROLLO DE SOFTWARE',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 38,
            'name' => 'INTEGRADORA II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 39,
            'name' => 'INGLÉS V',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 40,
            'name' => 'EXPRESIÓN ORAL Y ESCRITA II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 41,
            'name' => 'EMPRENDIMIENTO V',
            'created_at' => now()
        ]);
        //MAY-AGO18
        DB::table('subjects')->insert([
            'id' => 42,
            'name' => 'ESTADÍA',
            'created_at' => now()
        ]);
        //INGENIERÍA
        //SEP-DIC18
        DB::table('subjects')->insert([
            'id' => 43,
            'name' => 'MATEMÁTICAS PARA TI',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 44,
            'name' => 'INGENIERÍA ECONÓMICA',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 45,
            'name' => 'ADMINISTRACIÓN DE PROYECTOS DE TI I',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 46,
            'name' => 'SISTEMAS DE CALIDAD EN TI',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 47,
            'name' => 'ELECTRÓNICA BÁSICA',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 48,
            'name' => 'INGLÉS VI',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 49,
            'name' => 'ADMINISTRACIÓN DEL TIEMPO',
            'created_at' => now()
        ]);
        //ENE-ABR19
        DB::table('subjects')->insert([
            'id' => 50,
            'name' => 'ESTADÍSTICA APLICADA',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 51,
            'name' => 'ADMINISTRACIÓN DE PROYECTOS DE TI II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 52,
            'name' => 'BASE DE DATOS PARA APLICACIONES',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 53,
            'name' => 'REDES CONVERGENTES',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 54,
            'name' => 'INGLÉS VII',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 55,
            'name' => 'PLANEACIÓN Y ORGANIZACIÓN DEL TRABAJO',
            'created_at' => now()
        ]);
        //MAY-AGO19
        DB::table('subjects')->insert([
            'id' => 56,
            'name' => 'AUDITORÍA EN SISTEMAS DE TI',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 57,
            'name' => 'PROGRAMACIÓN DE APLICACIONES',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 58,
            'name' => 'APLICACIÓN DE LAS TELECOMUNICACIONES',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 59,
            'name' => 'INTELIGENCIA DE NEGOCIOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 60,
            'name' => 'INGLÉS VIII',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 61,
            'name' => 'DIRECCIÓN DE EQUIPOS DE ALTO RENDIMIENTO',
            'created_at' => now()
        ]);
        //SEP-DIC19
        DB::table('subjects')->insert([
            'id' => 62,
            'name' => 'MODELADO DE PROCESOS DE NEGOCIOS',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 63,
            'name' => 'DESARROLLO DE APLICACIONES WEB',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 64,
            'name' => 'SEGURIDAD DE LA INFORMACIÓN',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 65,
            'name' => 'TÓPICOS SELECTOS DE TI',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 66,
            'name' => 'INTEGRADORA II',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 67,
            'name' => 'INGLÉS IX',
            'created_at' => now()
        ]);
        DB::table('subjects')->insert([
            'id' => 68,
            'name' => '	NEGOCIACIÓN EMPRESARIAL',
            'created_at' => now()
        ]);
    }
}
