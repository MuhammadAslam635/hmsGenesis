<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'laboratory_id',
        'patient_id',
        'name',
        'description',
        'price',
        'tested_by',
        'laboratory_employee_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'laboratory_id' => 'integer',
        'patient_id' => 'integer',
        'price' => 'decimal:2',
        'tested_by' => 'integer',
        'laboratory_employee_id' => 'integer',
    ];

    public function laboratoryEmployee(): BelongsTo
    {
        return $this->belongsTo(LaboratoryEmployee::class);
    }

    public function laboratory(): BelongsTo
    {
        return $this->belongsTo(Laboratory::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function testedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
