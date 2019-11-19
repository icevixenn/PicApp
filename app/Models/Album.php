<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }
}
