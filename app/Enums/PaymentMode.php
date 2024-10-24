<?php

namespace App\Enums;



/**
 * only php8.1
 */
enum PaymentMode: string
{
    CASE COD = 'cod';
    CASE CARD = 'card';
    CASE ONLINE = 'online';

    public function labels(): string
    {
        return match ($this) {
            self::COD => '💸 Cash on Delivery',
            self::CARD => '💳 Card Payment',
            self::ONLINE => '💻 Online Payment',
        };
    }

    // Returns labels for PowerGrid Select Filter
    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
