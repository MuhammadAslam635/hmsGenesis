<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id',
        'user_id',
        'created_by',
        'role',
        'hospital_hospital_admin_user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hospital_id' => 'integer',
        'user_id' => 'integer',
        'created_by' => 'integer',
        'hospital_hospital_admin_user_id' => 'integer',
    ];

    public function hospitalHospitalAdminUser(): BelongsTo
    {
        return $this->belongsTo(HospitalHospitalAdminUser::class);
    }

    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(HospitalAdmin::class);
    }
}
