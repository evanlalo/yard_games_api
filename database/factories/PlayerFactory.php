<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker\Factory::create();

        return [
            'first_name' => $faker->firstName(),
            'email' => $faker->email(),
        ];
    }
}
