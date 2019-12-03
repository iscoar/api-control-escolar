<?php

use Illuminate\Database\Seeder;

class StudentAbsencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = DB::table('group_evaluation_levels')
        ->join('subject_teacher_groups','group_evaluation_levels.stg_id', 'subject_teacher_groups.id')
        ->select('group_evaluation_levels.id')
        ->where('subject_teacher_groups.group_id', 4)
        ->get();

        foreach($levels as $level){
            DB::table('student_absences')->insert([
                'student_id' => 'R161306021',
                'gel_id' => $level->id,
                'absences' => 1,
                'created_at' => now()
            ]); 
            DB::table('student_absences')->insert([
                'student_id' => 'R161306068',
                'gel_id' => $level->id,
                'absences' => 1,
                'created_at' => now()
            ]);
            DB::table('student_absences')->insert([
                'student_id' => 'R160306165',
                'gel_id' => $level->id,
                'absences' => 1,
                'created_at' => now()
            ]);
            DB::table('student_absences')->insert([
                'student_id' => 'R162506099',
                'gel_id' => $level->id,
                'absences' => 1,
                'created_at' => now()
            ]);
            DB::table('student_absences')->insert([
                'student_id' => 'R161305933',
                'gel_id' => $level->id,
                'absences' => 1,
                'created_at' => now()
            ]);
        }
    }
}
