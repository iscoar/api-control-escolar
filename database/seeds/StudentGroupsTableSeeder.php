<?php

use Illuminate\Database\Seeder;

class StudentGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GRUPO CUATRIMESTRE 1
        DB::table('student_groups')->insert([
            'group_id' => 1,
            'student_id' => 'R161306021',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 1,
            'student_id' => 'R161306068',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 1,
            'student_id' => 'R160306165',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 1,
            'student_id' => 'R162506099',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 1,
            'student_id' => 'R161305933',
            'created_at' => now()
        ]);

         //GRUPO CUATRIMESTRE 2
         DB::table('student_groups')->insert([
            'group_id' => 2,
            'student_id' => 'R161306021',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 2,
            'student_id' => 'R161306068',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 2,
            'student_id' => 'R160306165',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 2,
            'student_id' => 'R162506099',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 2,
            'student_id' => 'R161305933',
            'created_at' => now()
        ]);

        //GRUPO CUATRIMESTRE 3
        DB::table('student_groups')->insert([
        'group_id' => 3,
        'student_id' => 'R161306021',
        'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 3,
            'student_id' => 'R161306068',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 3,
            'student_id' => 'R160306165',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 3,
            'student_id' => 'R162506099',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 3,
            'student_id' => 'R161305933',
            'created_at' => now()
        ]);

        //GRUPO CUATRIMESTRE 4
        DB::table('student_groups')->insert([
            'group_id' => 4,
            'student_id' => 'R161306021',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 4,
            'student_id' => 'R161306068',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 4,
            'student_id' => 'R160306165',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 4,
            'student_id' => 'R162506099',
            'created_at' => now()
        ]);
        DB::table('student_groups')->insert([
            'group_id' => 4,
            'student_id' => 'R161305933',
            'created_at' => now()
        ]);
    }
}
