<?php

namespace App\Enums;

enum Reaction: string
{
    case LIKE = 'like';
    case LOVE = 'love';
    case HAHA = 'haha';
    case WOW = 'wow';
    case SAD = 'sad';
    case ANGRY = 'angry';

    public function emoji(): string
    {
        return match ($this) {
            self::LIKE => '👍',
            self::LOVE => '🥰',
            self::HAHA => '😆',
            self::WOW => '😲',
            self::SAD => '🥲',
            self::ANGRY => '😡',
        };
    }
}