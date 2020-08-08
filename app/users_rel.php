<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_rel extends Model
{
    public function users(){
    	$this->belongsTo(user::class);
    }
}
