<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
    	'user_id','number','ammount',
    ];
    public function user(){

        return $this->belongsTo('App\User');
     }
}
