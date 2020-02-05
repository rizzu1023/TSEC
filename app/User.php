<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Vendor(){
        return $this->hasOne(Vendor::class,'user_id');
    }

    public function Customer(){
        return $this->hasOne(Customer::class,'user_id');
    }

    public function Cart(){
        return $this->hasMany(Cart::class,'user_id','id');
    }

    public function Item(){
        return $this->belongsToMany(Item::class)->withTimestamps();
    }
}
