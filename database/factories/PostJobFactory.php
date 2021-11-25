<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Period;
use App\Models\Discipline;

class PostJobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'document' => $this->faker->text(),
            'visible' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, count(User::all())),
            'period_id' => $this->faker->numberBetween(1, count(Period::all())),
            'discipline_id' => $this->faker->numberBetween(1, count(Discipline::all())),
        ];
    }
}
