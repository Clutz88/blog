<?php

namespace App\Http\Resources;

use App\Models\Reaction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Reaction */
class ReactionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'type' => $this->type,
            'emoji' => $this->emoji,
            'count' => $this->count,
        ];
    }
}
