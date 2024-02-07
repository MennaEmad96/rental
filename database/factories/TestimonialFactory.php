<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/admin/testimonialImages", 260, 260);

        return [
            'name' => fake()->firstName() . " " . fake()->lastName(),
            'position' => fake()->word(),
            // 'content' => fake()->sentence(50),
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.",
            //save image name into database
            'image' => basename($fakerFileName),
            'published' => fake()->numberBetween(0, 1),
        ];
    }
}
