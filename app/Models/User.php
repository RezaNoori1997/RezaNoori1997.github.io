<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'last_name',
        'email',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function services()
    {
        return $this->belongsToMany(ServiceCenter::class, 'services', 'user_id', 'center_id')
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
        return $this->belongsToMany(ServiceCenter::class, 'turns', 'user_id', 'center_id')
            ->withPivot([
                'start_time',
                'end_time',
                'date',
            ]);
    }

    public function service_center()
    {
        return $this->hasOne(ServiceCenter::class, 'user_id');
    }
}
