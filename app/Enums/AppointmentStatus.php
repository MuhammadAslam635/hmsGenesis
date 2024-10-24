<?php

namespace App\Enums;

enum AppointmentStatus: string
{
    case SCHEDULED = 'scheduled';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public function labels(): string
    {
        return match ($this) {
            self::SCHEDULED => '📅 Scheduled',
            self::COMPLETED => '✅ Completed',
            self::CANCELLED => '❌ Cancelled',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
