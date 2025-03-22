<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $client = Role::create(['name' => 'Client']);
        $guest = Role::create(['name' => 'Guest']);

        // Create permissions
        // Permission::create(['name' => 'manage users']);
        // Permission::create(['name' => 'manage projects']);
        // Permission::create(['name' => 'view reports']);

        // Assign permissions
        // $admin->givePermissionTo(['manage users', 'manage projects', 'view reports']);
        // $client->givePermissionTo(['manage projects', 'view reports']);
        // $guest->givePermissionTo(['view reports']);
    }
}
