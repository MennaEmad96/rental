<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

    // Generate password I know:
    // 1) comment this line
    // protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 2) add a password variable with it's value
        $password = "00000000";
        $fname = fake()->firstName();
        $lname = fake()->lastName();
        return [
            'fullName' => $fname.'_'.$lname,
            'userName' => $fname.'_'.$lname.fake()->numberBetween(20, 30),
            'email' => $fname.'_'.$lname.'@gmail.com',
            'email_verified_at' => now(),
            // 3) remove static from this line
            // 'password' => static::$password ??= Hash::make('password'),
            'password' => $password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'active' => fake()->numberBetween(0, 1),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
