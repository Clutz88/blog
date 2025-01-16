<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->paragraph(),
            'commentable_type' => Post::class,
            'commentable_id' => Post::factory(),
            'user_id' => User::factory(),
        ];
    }
}
