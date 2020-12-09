<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmoney extends Model
{
     protected $fillable = [
        'user_id','money','textid',
    ];
    
    public function user(){

        return $this->belongsTo('App\User');
     }
}
