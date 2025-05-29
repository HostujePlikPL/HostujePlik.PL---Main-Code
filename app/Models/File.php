<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'uuid',
        'bundle_slug',
        'original',
        'filesize',
        'fullpath',
        'filename',
        'created_at',
        'updated_at',
        'status',
        'hash'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    public function getKeyName()
    {
        return 'uuid';
    }

    public function bundle()
    {
        return $this->belongsTo(Bundle::class);
    }
}
