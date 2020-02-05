<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
//    public function Item(){
//        return $this->belongsToMany(Item::class)->withTimestamps();
//    }

    protected  $guarded = [];

    public function Item(){
        return $this->hasOne(Item::class,'id');
    }
}
