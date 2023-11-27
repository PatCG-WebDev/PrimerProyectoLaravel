<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 
        'slug',
        'surName', 
        'userName', 
        'password',
        'email', 
        'phone', 
        'seccion'
    ];

    public function setPasswordAttribute($value)
    {
        if(Hash::needsRehash($value) ) {
            $value = Hash::make($value);
        }
        $this->attributes['password'] = $value;
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
