<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $fillable = [
        'user_id','phno','type','icon',
    ];
    
    public function user(){

        return $this->belongsTo('App\User');
     }
}
