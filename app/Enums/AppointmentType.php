<?php

namespace App\Enums;

enum AppointmentType: string
{
    case ONLINE = 'online';
    case PHYSICAL = 'physical';

    public function labels(): string
    {
        return match ($this) {
            self::ONLINE => '💻 Online',
            self::PHYSICAL => '🏥 Physical',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
