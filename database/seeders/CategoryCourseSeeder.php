<?php

namespace Database\Seeders;

use App\Models\CategoryCourse;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class CategoryCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryCourse::create(['name' => 'Ciências Exatas']);
        CategoryCourse::create(['name' => 'Ciências da Natureza']);
        CategoryCourse::create(['name' => 'Linguagens']);
        CategoryCourse::create(['name' => 'Ciências Sociais']);
        CategoryCourse::create(['name' => 'Educação e Inclusão']);
    }
}
