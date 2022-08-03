<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionGroup;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::factory()
            ->count(12)
            ->state(new Sequence(
                fn ($sequence) => ['permission_group_id' => PermissionGroup::all()->random()],
            ))
            ->create();
    }
}
