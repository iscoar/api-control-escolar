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
            StudyPlanSubjectsTableSeeder::class,
            ClassroomsTableSeeder::class,
            GroupsTableSeeder::class,
            ]);
    }
}
