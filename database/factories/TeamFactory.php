<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/admin/teamImages", 260, 260);

        return [
            'name' => fake()->firstName() . " " . fake()->lastName(),
            'position' => "Founder",
            'content' => fake()->text(),
            //save image name into database
            'image' => basename($fakerFileName),
            'published' => fake()->numberBetween(0, 1),
        ];
    }
}
