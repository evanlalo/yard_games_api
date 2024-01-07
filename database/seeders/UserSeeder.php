<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('player', 'admin');

        $users = User::factory()->count(11)->create();
        $users->each(function ($user) {
            $user->assignRole('player');
        });

        $teams = Team::all();

        foreach ($teams as $team) {
            $users = User::whereNull('current_team')->take(2)->get();

            $team->users()->attach($users);

            $users->each(function ($player) use ($team) {
                $player->current_team = $team->id;
                $player->update();
            });

        }

    }
}
