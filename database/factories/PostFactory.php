<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'user_id' => fake()->biasedNumberBetween(1),
           'category_id' => fake()->biasedNumberBetween(1),
           'tag_id' => fake()->biasedNumberBetween(1),
           'image_id' => fake()->biasedNumberBetween(1),
           'author_id' => fake()->biasedNumberBetween(1),

            'title' => fake()->sentence(10),
            'content' => fake()->sentence(100),
            'slug' => fake()->slug(5),
            'excerpt' => fake()->sentence(15),
            'status' => fake()->boolean(80),
        ];
    }
}
