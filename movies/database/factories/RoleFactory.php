<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'film_id' => $this->faker->numberBetween(1, 10),
            'user_id' => 1,
            'name' => $this->faker->word(), 
        ];
    }
}
