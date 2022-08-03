<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Taggable;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    public function run()
    {
        Taggable::factory()
            ->count(16)
            ->state(new Sequence(
                fn ($sequence) => [
                    'tag_id' => Tag::all()->random(),
                    'taggable_id' => User::all()->random(),
                ],
            ))
            ->create();
    }
}
