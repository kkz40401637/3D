<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'user_id','name','wmoney','phno','type',
    ];
    public function user(){

        return $this->belongsTo('App\User');
     }
   
}
