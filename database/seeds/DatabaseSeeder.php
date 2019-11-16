<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SubjectsTableSeeder::class,
            EvaluationCriteriaTableSeeder::class,
            EvaluationLevelsTableSeeder::class,
            GradesTableSeeder::class,
            LevelsTableSeeder::class,
            BuildingsTableSeeder::class,
            DocumentsTableSeeder::class,
            StatesTableSeeder::class,
            TownshipsTableSeeder::class,
            UsersTableSeeder::class,
            CyclesTableSeeder::class,
            CareersTableSeeder::class,
            StudyPlansTableSeeder::class,
            StudyPlanGradesTableSeeder::class,
            StudyPlanGradeSubjectsTableSeeder::class,
            ClassroomsTableSeeder::class,
            GroupsTableSeeder::class,
            StudentsTableSeeder::class,
            TeachersTableSeeder::class,
            UserDocumentsTableSeeder::class,
            TutorsTableSeeder::class,
            StudentGroupsTableSeeder::class,
            SubjectTeacherGroupsTableSeeder::class,
            GroupEvaluationLevelsTableSeeder::class,
            EvaluationCriteriaPercentagesTableSeeder::class,
            StudentScoresTableSeeder::class,
            GrantsTableSeeder::class,
            StudentGrantsTableSeeder::class,
            PaymentConceptsTableSeeder::class,
            StudentPaymentsTableSeeder::class,
            TuitionFeesTableSeeder::class,
            FineDetailsTableSeeder::class
            ]);
    }
}
