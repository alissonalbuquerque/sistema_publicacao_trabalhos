<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Discipline;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discipline::create(['name' => 'Algoritmos']);
        Discipline::create(['name' => 'Programação Orientada a Objetos']);
        Discipline::create(['name' => 'Paradigmas de Linguagem de Programação']);
        Discipline::create(['name' => 'Computação Ética e Sociedade']);
        Discipline::create(['name' => 'I.A']);
    }
}
