<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallDecor extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'sizes' => 'array',
    ];


    public function options()
    {
        return $this->hasMany(WallDecorOption::class);
    }

}
