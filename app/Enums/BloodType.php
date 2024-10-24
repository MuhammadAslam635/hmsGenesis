<?php

namespace App\Enums;

enum BloodType: string
{
    case A_POSITIVE = 'A+';
    case A_NEGATIVE = 'A-';
    case B_POSITIVE = 'B+';
    case B_NEGATIVE = 'B-';
    case AB_POSITIVE = 'AB+';
    case AB_NEGATIVE = 'AB-';
    case O_POSITIVE = 'O+';
    case O_NEGATIVE = 'O-';

    public function labels(): string
    {
        return match ($this) {
            self::A_POSITIVE => '🅰️+ A Positive',
            self::A_NEGATIVE => '🅰️- A Negative',
            self::B_POSITIVE => '🅱️+ B Positive',
            self::B_NEGATIVE => '🅱️- B Negative',
            self::AB_POSITIVE => '🆎+ AB Positive',
            self::AB_NEGATIVE => '🆎- AB Negative',
            self::O_POSITIVE => '🅾️+ O Positive',
            self::O_NEGATIVE => '🅾️- O Negative',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
