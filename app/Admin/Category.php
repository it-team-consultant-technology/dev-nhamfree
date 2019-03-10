<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //conntect to table category from mr blackfdsafdsafdjsakfj dsa;fjdsakfjdsakfjds
    //fdsafdsafdsafdsafdsfd
    protected $table = "categories";
<<<<<<< HEAD
    //welcome for our
=======
    //welcome

>>>>>>> 600b3dba3976809ae7ec92c96738bb582f1e104d

    public function product(){
    	return $this->hasMany(\App\Admin\Product::class);
    }
}
