<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }

    public function accessories()
    {
        return $this->hasMany(Accessory::class);
    }

    public function cleaners()
    {
        return $this->hasMany(Cleaner::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }


    public function floor_brands()
    {
        return $this->hasMany(FloorBrand::class);
    }
}
