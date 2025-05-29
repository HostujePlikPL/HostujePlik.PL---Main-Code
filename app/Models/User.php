<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'connected_at' => 'datetime',
    ];

    public function bundles()
    {
        return $this->hasMany(Bundle::class);
    }
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
