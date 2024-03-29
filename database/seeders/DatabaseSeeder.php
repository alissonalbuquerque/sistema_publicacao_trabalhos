<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Course;
use App\Models\PostJob;
use App\Models\University;
use App\Models\CategoryCourse;

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
            TypeUserSeeder::class,
            UserSeeder::class,
            UniversitySeeder::class,
            CourseSeeder::class,
            PeriodSeeder::class,
            DisciplineSeeder::class,
            CategoryCourseSeeder::class,
            PostJobSeeder::class,
        ]);
    }
}
