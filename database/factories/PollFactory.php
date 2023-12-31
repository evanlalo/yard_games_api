<?php

namespace Database\Factories;

use App\Models\poll;
use App\Models\PollStates;
use App\Models\PollTypes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\poll>
 */
class PollFactory extends Factory
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
            "category" => $faker->sentence(),
            "type" => Arr::random(PollTypes::cases()),
            "state" => PollStates::Open
        ];
    }
}
