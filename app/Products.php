<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Products extends Model
{
   function getPrice()
    {
        $price=number_format($this->price)." VND";
        return $price;
    }
    public function category(){
		return $this->belongsTo("App\Category","category_id","id");
	}
}
