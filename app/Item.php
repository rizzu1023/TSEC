<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Vendor(){
        return $this->belongsTo(Vendor::class,'vendor_id');
    }

    public function Customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function Cart(){
        return $this->belongsToMany(Cart::class)->withTimestamps();
    }
    protected $guarded=[];

    public function User(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }


}
