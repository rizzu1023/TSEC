<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function Item(){
        return $this->belongsToMany(Item::class)->withTimestamps();
    }
}
