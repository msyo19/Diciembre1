<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['rgb', 'hex', 'cymk'];

    public function brand() {
        return $this->belongsToMany('App\Brand');
    }

}
