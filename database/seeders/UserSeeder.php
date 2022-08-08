<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->state([
                'name' => 'root',
                'email' => 'root@gmail.com',
                'username' => 'root',
                'password' => Hash::make('123@123'),
                'type' => User::TYPES['admin'],
                'verified_at' => now(),
            ])
            ->create();
    }
}
