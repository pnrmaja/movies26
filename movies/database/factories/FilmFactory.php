<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'year' => $this->faker->year(),
            'minutes' => $this->faker->numberBetween(60, 180),
            'director_id' => $this->faker->numberBetween(1, 10),
            'gender_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
