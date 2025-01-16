<?php

namespace App\Concerns;

use App\Models\Reaction;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\DB;

trait HasReactions
{
    public function reactions(): MorphMany
    {
        return $this->morphMany(Reaction::class, 'reactionable')
            ->select()
            ->select('*', DB::raw('count(type) as count'))
            ->groupBy('type');
    }
}
