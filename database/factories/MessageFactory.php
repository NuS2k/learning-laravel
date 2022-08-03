<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    public function definition()
    {
        return [
            'room' => fake()->word(),
            'sender_type' => 'user',
            'receiver_id' => 1,
            'receiver_type' => 'user',
            'content' => fake()->sentence(),
            'content_type' => 'text',
            'association_id' => '',
            'association_type' => '',
        ];
    }
}
