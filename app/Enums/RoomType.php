<?php

namespace App\Enums;

enum RoomType: string
{
    case SINGLE = 'single';
    case DOUBLE = 'double';
    case WARD = 'ward';

    public function labels(): string
    {
        return match ($this) {
            self::SINGLE => '🛏️ Single Room',
            self::DOUBLE => '🛏️🛏️ Double Room',
            self::WARD => '🏥 Ward',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
