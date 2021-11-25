<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create(['name' => 'Computação']);
        Course::create(['name' => 'Engenharia Elétrica']);
        Course::create(['name' => 'Engenharia de Software']);
        Course::create(['name' => 'Ciência da Computação']);
        Course::create(['name' => 'Engenharia da Computação']);
    }
}
