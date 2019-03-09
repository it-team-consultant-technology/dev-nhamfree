<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Product;
use App\Admin\Category;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    //
    public function productList(Request $req){
    	$products = Product::where(['product_status'=> 1])->orderBy('product_name')->get();
    	return view('product.product_list', compact('products'));
    }

    public function productForm( ){
    	return view('product.product_form');
    }

    public function createProduct(Request $req){
    	$cAdd = new Category;
    	$cAdd->name = $req->category_name;
    	$cAdd->slug = Str::slug($req->category_name, '-');
    	$cAdd->desc = $req->desc;
    	if($cAdd->save()){
    		return back()->with("message", "you Successfully Saved");
    	}



    }
}
