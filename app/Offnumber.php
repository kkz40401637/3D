<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offnumber extends Model
{
    protected $fillable = [
    	'user_id','offnumber',
    ];
     public function user(){

        return $this->belongsTo('App\User');
     }
}
