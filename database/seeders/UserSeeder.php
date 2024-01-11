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
        // Create admin user
        $admin = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => 'admin',
        ])->assignRole('player', 'admin');

        $token = $admin->createToken('api_access');
        echo "\n\n Admin API access token: \n{$token->plainTextToken}\n\n";

        // Create default player user
        User::factory()->create([
            'email' => 'player@example.com',
            'password' => null,
        ])->assignRole('player');

        $users = User::factory()->player()->count(10)->create();
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
