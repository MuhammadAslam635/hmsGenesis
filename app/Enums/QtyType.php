<?php

namespace App\Enums;

enum QtyType: string
{
    case KG = 'kg';
    case LTR = 'ltr';
    case INCHES = 'inches';

    public function labels(): string
    {
        return match ($this) {
            self::KG => '⚖️ Kilogram',
            self::LTR => '🧴 Liter',
            self::INCHES => '📏 Inches',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
