<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'player']);

        // Ensure this runs last!!!!
        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
    }
}
