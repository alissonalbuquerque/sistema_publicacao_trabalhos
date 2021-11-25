<?php

namespace Database\Seeders;

use App\Models\PostJob;
use Illuminate\Database\Seeder;

class PostJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postJobs = PostJob::factory()->count(50)->make();
        foreach($postJobs as $postJob) {
            $postJob->save();
        }
    }
}
