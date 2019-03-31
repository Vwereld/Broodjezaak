<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function cart(){
        return $this->belongsTo('App\Cart','id');
    }
}
