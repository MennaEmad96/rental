<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fname = fake()->firstName();
        $lname = fake()->lastName();
        return [
            'firstName' => $fname,
            'lastName' => $lname,
            'email' => $fname.'_'.$lname.'@gmail.com',
            'content' => fake()->text(),
            'isRead' => fake()->numberBetween(0, 1),
        ];
    }
}
