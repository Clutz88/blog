<?php

namespace App\Models;

use App\Enums\Reaction as ReactionEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reaction extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'type' => ReactionEnum::class
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reactionable(): MorphTo
    {
        return $this->morphTo();
    }

    protected function getEmojiAttribute(): string
    {
        return $this->type->emoji();
    }
}
