<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'description'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function colors() {
        return $this->belongsToMany('App\Color');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
