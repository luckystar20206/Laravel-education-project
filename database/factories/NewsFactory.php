<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(10, 30)),
            'text' => $this->faker->realText(rand(1000, 3000)),
            'description' => $this->faker->realText(rand(50, 200)),
            'image-url' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
