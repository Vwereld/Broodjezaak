<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soort extends Model
{
    protected $table = 'soort';
    public function items(){
        return $this->belongsToMany('App\Item','items');
    }
    public function carts(){
        return $this->hasOne('App\Cart','soort_id','id');
    }
}
