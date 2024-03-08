<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function profile_type()
    {
        return $this->belongsTo(ProfileType::class);
    }


    /** Live wire functions */
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()
                ->where('id', 'like', '%' . $search . '%')

                ->orWhereDoesntHave('profile_type')->orWhereHas('profile_type', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');

                })->orWhereDoesntHave('material')->orWhereHas('material', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');

                })->orWhereDoesntHave('color')->orWhereHas('color', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
    }

    public function scopeGetProfileType($query, $profile_type)
    {
        if ($profile_type != null) {
            return $query->whereHas('profile_type', function ($query) use ($profile_type) {
                $query->where('profile_type_id', '=', $profile_type);
            });
        }
        return $query;

    }

    public function scopeGetMaterial($query, $material)
    {
        if ($material != null) {
            return $query->whereHas('material', function ($query) use ($material) {
                $query->where('material_id', '=', $material);
            });
        }

        return $query;

    }

    public function scopeGetColor($query, $color)
    {
        if ($color != null) {
            return $query->whereHas('color', function ($query) use ($color) {
                $query->where('color_id', '=', $color);
            });
        }

        return $query;

    }


}
