<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallDecorOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'sizes' => 'array', // Ensure this is cast as an array
    ];

    public function wallDecor()
    {
        return $this->belongsTo(WallDecor::class);
    }
}
