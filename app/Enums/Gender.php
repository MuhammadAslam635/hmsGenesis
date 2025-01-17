<?php

namespace App\Enums;

enum Gender: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';

    public function labels(): string
    {
        return match ($this) {
            self::MALE => '♂️ Male',
            self::FEMALE => '♀️ Female',
            self::OTHER => '⚧️ Other',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
