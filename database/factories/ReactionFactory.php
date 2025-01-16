<?php

namespace Database\Factories;

use App\Enums\Reaction as ReactionEnum;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReactionFactory extends Factory
{
    protected $model = Reaction::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'reactionable_type' => Post::class,
            'reactionable_id' => Post::factory(),
            'type' => $this->faker->randomElement(ReactionEnum::class),
        ];
    }
}
