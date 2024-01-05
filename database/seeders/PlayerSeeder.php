<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::factory()->count(12)->create();

        $teams = Team::all();

        foreach ($teams as $team) {
            $players = Player::whereNull('current_team')->take(2)->get();

            $team->players()->attach($players);

            $players->each(function ($player) use ($team) {
                $player->current_team = $team->id;
                $player->update();
            });

        }

    }
}
