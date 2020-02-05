<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function Item(){
        return $this->hasMany(Item::class,'vendor_id','id');
    }

    public function User(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
