<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Football extends Model
{
     protected $fillable = [
        'user_id','home','away','plus','minus','gold',
    ];
    public function user(){

        return $this->belongsTo('App\User');
     }
}
