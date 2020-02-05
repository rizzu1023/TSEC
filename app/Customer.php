<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function User(){
        return $this->hasOne(User::class,'id');
    }
}
