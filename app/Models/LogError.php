<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogError extends Model
{
    protected $connection = 'pgsql2';
    protected $table='log_errors';
    protected $fillable=[
        'location','model','error'
    ];
}
