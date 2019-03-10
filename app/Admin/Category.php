<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //conntect to table category from mr blackfdsafdsafdjsakfj dsa;fjdsakfjdsakfjds
    //fdsafdsafdsafdsafdsfd
    protected $table = "categories";
    //welcome


    public function product(){
    	return $this->hasMany(\App\Admin\Product::class);
    }
}
