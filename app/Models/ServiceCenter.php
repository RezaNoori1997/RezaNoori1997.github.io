<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCenter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(User::class, 'services', 'center_id', 'user_id')
            ->withPivot([
                'current_km',
                'next_km',
                'created_at',
                'plaque_2',
                'plaque_alpha',
                'plaque_3',
                'plaque_ir',
                'oil_change',
                'gearbox_oil_change',
                'differential_oil_change',
                'oil_filter_replacement',
                'air_filter_replacement',
                'wind_adjustment',
                'payment',
            ]);
    }

    public function turns()
    {
        return $this->belongsToMany(User::class, 'turns', 'center_id', 'user_id')
            ->withPivot([
                'start_time',
                'end_time',
                'date',
            ]);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
