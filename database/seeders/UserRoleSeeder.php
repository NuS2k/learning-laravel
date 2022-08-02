<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('users_roles')->insert([
                'user_id' => User::all()->random()->id,
                'role_id' => Role::all()->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
