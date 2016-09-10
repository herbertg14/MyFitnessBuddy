<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use User;

class Meals extends Model
{
    //
   
    public function user(){
    
    	return $this->belongsTo(User::class);
    }
}
