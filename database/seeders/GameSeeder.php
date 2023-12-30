<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use Database\Factories\GameFactory;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($k = 0 ; $k < GameFactory::games_count(); $k++) {
            Game::factory()->create();
        }
    }
}
