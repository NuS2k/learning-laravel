<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaggableFactory extends Factory
{
    public function definition()
    {
        return [
            'taggable_type' => fake()->word(),
            'type' => fake()->randomDigit(),
        ];
    }
}
