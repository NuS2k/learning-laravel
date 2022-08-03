<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(20)
            ->state(new Sequence(
                fn ($sequence) => ['school_id' => School::all()->random()],
            ))
            ->create();
    }
}
