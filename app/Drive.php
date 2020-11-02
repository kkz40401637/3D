<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $fillable = [
    	'user_id','foot','foota','footb','footc','footd','foote','footf','footg','footh','footi','money',
    ];
    public function user(){

        return $this->belongsTo('App\User');
     }
}
