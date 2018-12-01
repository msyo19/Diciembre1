<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['link'];

    public function brand() {
        return $this->hasMany('App\Brand');
    }
}