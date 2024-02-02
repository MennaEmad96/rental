<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/admin/carImages", 500, 400);

        return [
            'title' => fake()->word(),
            'price' => fake()->randomFloat(99.99, 1000000.99, 9898.11, 109000000.9),
            'luggages' => fake()->numberBetween(2,15),
            'doors' => fake()->numberBetween(1,8),
            'passengers' => fake()->numberBetween(1,20),
            'content' => fake()->text(),
            //save image name into database
            'image' => basename($fakerFileName),
            'active' => fake()->numberBetween(0, 1),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
