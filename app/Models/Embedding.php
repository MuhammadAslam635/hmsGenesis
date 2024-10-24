<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embedding extends Model
{
    protected $connection = 'pgsql2';
    protected $table = 'embeddings';

    protected $fillable=[
        'embeddings',
        'content',
        'sourcetype',
        'type',
        'sourcename',
    ];
}
