<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        $this->call([
            AttachmentSeeder::class,
            SchoolSeeder::class,
            UserSeeder::class,
            MessageSeeder::class,
            PermissionGroupSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            TagSeeder::class,
            TaggableSeeder::class,
            UserRoleSeeder::class,
            RolesPermissionSeeder::class,
        ]);
    }
}
