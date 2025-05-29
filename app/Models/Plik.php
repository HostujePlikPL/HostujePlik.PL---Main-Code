<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plik extends Model
{
    protected $table = 'pliki';

    protected $fillable = [
        'uid',
        'user_id',
        'nazwa_pliku',
        'opis',
        'pin',
        'numer_folderu',
        'certyfikat',
        'uploaded_at',
        'downloads',
        'file_path',
    ];

    public $timestamps = true; // Laravel obsłuży created_at i updated_at automatycznie

    // Relacja z użytkownikiem, jeśli potrzebna
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
