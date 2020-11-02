<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodyl extends Model
{
    protected $fillable = [
    	'user_id','bodya','bodyb','bodyc','bodyd','bodye','moneya','moneyb','moneyc','moneyd','moneye',
    ];
    
    public function user(){

        return $this->belongsTo('App\User');
     }
}
