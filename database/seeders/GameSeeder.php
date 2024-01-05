<?php

namespace Database\Seeders;

use App\Models\Game;
use Database\Factories\GameFactory;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($k = 0; $k < GameFactory::games_count(); $k++) {
            Game::factory()->create();
        }
    }
}
