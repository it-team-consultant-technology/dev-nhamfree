<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function category(){
    	return $this->belongsTo(\App\Admin\Category::class);
    }
}
