<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uptime extends Model
{
    protected $fillable = [
        'uptime_seconds',
        'reported_at',
    ];

    protected $casts = [
        'reported_at' => 'datetime',
    ];
}
