<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesPermissionSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('roles_permission')->insert([
                'permission_id' => Permission::select('id')->orderByRaw('RAND()')->first()->id,
                'role_id' => Role::select('id')->orderByRaw('RAND()')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
