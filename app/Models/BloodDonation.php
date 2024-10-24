<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodDonation extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blood_bank_id',
        'donor_id',
        'blood_type',
        'units',
        'donation_date',
        'blood_bank_donor_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'blood_bank_id' => 'integer',
        'donor_id' => 'integer',
        'donation_date' => 'datetime',
        'blood_bank_donor_id' => 'integer',
    ];

    public function bloodBankDonor(): BelongsTo
    {
        return $this->belongsTo(BloodBankDonor::class);
    }

    public function bloodBank(): BelongsTo
    {
        return $this->belongsTo(BloodBank::class);
    }

    public function donor(): BelongsTo
    {
        return $this->belongsTo(Donor::class);
    }
}
