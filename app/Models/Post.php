<?php

namespace App\Models;

use App\Concerns\HasReactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, HasReactions;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
