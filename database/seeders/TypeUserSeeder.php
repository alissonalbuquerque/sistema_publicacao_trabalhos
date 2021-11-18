<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\TypeUser;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        TypeUser::create(['name' => 'admin']);
        TypeUser::create(['name' => 'aluno']);
        TypeUser::create(['name' => 'moderador']);
    }
}
