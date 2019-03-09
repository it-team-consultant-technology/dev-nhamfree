<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //conntect to table category from mr black
    protected $table = "categories";


    public function product(){
    	return $this->hasMany(\App\Admin\Product::class);
    }
}