<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['quantity'];
	
    public function products(){
    	return $this->hasMany("App\Products","id","product_id");
    }

}
