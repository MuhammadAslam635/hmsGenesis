<?php

namespace App\Enums;

enum BedStatus: string
{
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';

    public function labels(): string
    {
        return match ($this) {
            self::AVAILABLE => '✅ Available',
            self::OCCUPIED => '🚫 Occupied',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
