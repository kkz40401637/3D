<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Towd extends Model
{
     protected $fillable = [
        'user_id',
        'towda','towdb','towdc','towdd','towde',
        'moneya','moneyb','moneyc','moneyd','moneye',

        'towdf','towdg','towdh','towdi','towdj',
        'moneyf','moneyg','moneyh','moneyi','moneyj',
    ];
    
    public function user(){

        return $this->belongsTo('App\User');
     }
}
