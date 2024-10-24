<?php

namespace App\Enums;

enum PaymentStatus: string
{
    case PAID = 'paid';
    case PARTIAL = 'partial';
    case PENDING = 'pending';

    public function labels(): string
    {
        return match ($this) {
            self::PAID => '✅ Paid',
            self::PARTIAL => '🔶 Partially Paid',
            self::PENDING => '⏳ Pending',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
