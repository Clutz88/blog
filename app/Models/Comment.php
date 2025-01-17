<?php

namespace App\Models;

use App\Concerns\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasComments, HasFactory;

    protected $fillable = ['comment', 'user_id'];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
