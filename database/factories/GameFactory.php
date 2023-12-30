<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;
use App\Models\Game;

const GAME_NAMES = [
    'Cornhole',
    'Beer Pong',
    'Flip Cup',
    'Badminton',
    'CanJam',
    'BeersBee'
];

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker\Factory::create();

        $game_name = null;
        foreach(GAME_NAMES as $name) {
            $game_name = $name;
            $name_found = Game::where("name", $name)->exists();

            if (!$name_found) {
                break;
            } else {
                continue;
            }
        }

        return [
            "name" => $game_name,
            "description" => $faker->sentence(),
            "active" => true
        ];

    }

    public static function games_count(): int
    {
        return count(GAME_NAMES);
    }
}
