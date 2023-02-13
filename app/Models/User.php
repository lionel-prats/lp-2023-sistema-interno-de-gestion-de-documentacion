<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    const ADMIN = 1;
    const USER = 0;
    const ACTIVE = 1;
    const INACTIVE = 0;

    protected $fillable = [
        'name',
        'email',
        'password',
        'slug'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relacion N a N entre users y categories
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
