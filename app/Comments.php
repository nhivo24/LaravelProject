<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    function users(){
    	return $this->belongsTo("App\User","user_id","id");
    }
}
