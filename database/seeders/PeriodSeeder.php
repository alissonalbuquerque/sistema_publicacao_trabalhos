<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create(['name' => '1º']);
        Period::create(['name' => '2º']);
        Period::create(['name' => '3º']);
        Period::create(['name' => '4º']);
        Period::create(['name' => '5º']);
        Period::create(['name' => '6º']);
        Period::create(['name' => '7º']);
        Period::create(['name' => '8º']);
    }
}
