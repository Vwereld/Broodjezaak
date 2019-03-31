<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'deleted_at',
        'brood',
        'beleg',
        'saus',
        'smos'
    ];
    public function items(){
        return $this->hasMany('App\Item','id');
    }
}
