<?php

use Illuminate\Database\Seeder;

class SubjectTeacherGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INGENIERÍA CUATRIMESTRE 1 (1-7) (43-49)
        //ITI7B
        DB::table('subject_teacher_groups')->insert([
            'id' => 1,
            'group_id' => 1,
            'subject_id' => 43,
            'teacher_id' => '11111',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 2,
            'group_id' => 1,
            'subject_id' => 44,
            'teacher_id' => '11112',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 3,
            'group_id' => 1,
            'subject_id' => 45,
            'teacher_id' => '11113',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 4,
            'group_id' => 1,
            'subject_id' => 46,
            'teacher_id' => '11114',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 5,
            'group_id' => 1,
            'subject_id' => 47,
            'teacher_id' => '11115',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 6,
            'group_id' => 1,
            'subject_id' => 48,
            'teacher_id' => '11116',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 7,
            'group_id' => 1,
            'subject_id' => 49,
            'teacher_id' => '11117',
            'created_at' => now()
        ]);

        //INGENIERÍA CUATRIMESTRE 2 (8-13) (50-55)
        //ITI78
        DB::table('subject_teacher_groups')->insert([
            'id' => 8,
            'group_id' => 2,
            'subject_id' => 50,
            'teacher_id' => '11111',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 9,
            'group_id' => 2,
            'subject_id' => 51,
            'teacher_id' => '11112',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 10,
            'group_id' => 2,
            'subject_id' => 52,
            'teacher_id' => '11113',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 11,
            'group_id' => 2,
            'subject_id' => 53,
            'teacher_id' => '11114',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 12,
            'group_id' => 2,
            'subject_id' => 54,
            'teacher_id' => '11115',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 13,
            'group_id' => 2,
            'subject_id' => 55,
            'teacher_id' => '11116',
            'created_at' => now()
        ]);

        //INGENIERÍA CUATRIMESTRE 3 (14-19) (SUBJ 56-61)
        //ITI9B
        DB::table('subject_teacher_groups')->insert([
            'id' => 14,
            'group_id' => 3,
            'subject_id' => 56,
            'teacher_id' => '11111',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 15,
            'group_id' => 3,
            'subject_id' => 57,
            'teacher_id' => '11112',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 16,
            'group_id' => 3,
            'subject_id' => 58,
            'teacher_id' => '11113',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 17,
            'group_id' => 3,
            'subject_id' => 59,
            'teacher_id' => '11114',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 18,
            'group_id' => 3,
            'subject_id' => 60,
            'teacher_id' => '11115',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 19,
            'group_id' => 3,
            'subject_id' => 61,
            'teacher_id' => '11116',
            'created_at' => now()
        ]);

        //INGENIERÍA CUATRIMESTRE 4 (20-25) (62-68)
        //ITI10B
        DB::table('subject_teacher_groups')->insert([
            'id' => 20,
            'group_id' => 4,
            'subject_id' => 62,
            'teacher_id' => '11111',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 21,
            'group_id' => 4,
            'subject_id' => 63,
            'teacher_id' => '11112',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 22,
            'group_id' => 4,
            'subject_id' => 64,
            'teacher_id' => '11113',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 23,
            'group_id' => 4,
            'subject_id' => 65,
            'teacher_id' => '11114',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 24,
            'group_id' => 4,
            'subject_id' => 66,
            'teacher_id' => '11115',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 25,
            'group_id' => 4,
            'subject_id' => 67,
            'teacher_id' => '11116',
            'created_at' => now()
        ]);
        DB::table('subject_teacher_groups')->insert([
            'id' => 26,
            'group_id' => 4,
            'subject_id' => 68,
            'teacher_id' => '11117',
            'created_at' => now()
        ]);
    }
}
