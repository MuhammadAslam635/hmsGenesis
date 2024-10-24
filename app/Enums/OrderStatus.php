<?php

namespace App\Enums;

enum OrderStatus: string
{
    case PENDING = 'pending';
    case ORDERED = 'ordered';
    case PROCESS = 'process';
    case DISPATCH = 'dispatch';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public function labels(): string
    {
        return match ($this) {
            self::PENDING => '⏳ Pending',
            self::ORDERED => '📝 Ordered',
            self::PROCESS => '🔄 In Process',
            self::DISPATCH => '🚚 Dispatched',
            self::COMPLETED => '✅ Completed',
            self::CANCELLED => '❌ Cancelled',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
