<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->word(),
            'excerpt' => $this->faker->word(),
            'published_at' => fake()->date,
        ];
    }
}
