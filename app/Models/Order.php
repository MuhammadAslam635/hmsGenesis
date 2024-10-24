<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pharmacy_id',
        'salesman_id',
        'delivery_date',
        'total',
        'subtotal',
        'discount',
        'order_status',
        'cancel_date',
        'canceling_reason',
        'pharmacy_salesman_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pharmacy_id' => 'integer',
        'salesman_id' => 'integer',
        'delivery_date' => 'date',
        'total' => 'double',
        'subtotal' => 'double',
        'discount' => 'double',
        'cancel_date' => 'date',
        'pharmacy_salesman_id' => 'integer',
    ];

    public function pharmacySalesman(): BelongsTo
    {
        return $this->belongsTo(PharmacySalesman::class);
    }

    public function pharmacy(): BelongsTo
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function salesman(): BelongsTo
    {
        return $this->belongsTo(Salesman::class);
    }

    public function orderItemTransactions(): HasMany
    {
        return $this->hasMany(OrderItemTransaction::class);
    }
}
