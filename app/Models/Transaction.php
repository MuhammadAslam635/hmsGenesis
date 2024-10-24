<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'payment_mode',
        'payment_status',
        'amount',
        'remaining_amount',
        'order_total',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'amount' => 'double',
        'remaining_amount' => 'double',
        'order_total' => 'double',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
