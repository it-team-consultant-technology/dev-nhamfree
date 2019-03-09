<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
	// products = App\Admin\Product::
	$products = \App\Admin\Product::where(['product_status'=> 1])->orderBy('title')->get();
    return view('index', compact('products'));
    
});


Route::get('product', "Admin\ProductController@productList")->name('productList');
Route::get('product/add', "Admin\ProductController@productForm")->name('productForm');
Route::post('product/add', "Admin\ProductController@createProduct")->name('createProduct');



// Route::domain('{account}.localhost:8000')->group(function () {
//     Route::get('user', function ($account) {
//         return $account;
//     });
// });

// Route::group(['domain' => 'admin.localhost:8000'], function () {
//     Route::get('user', function ($account) {
//         return $account;
//     });
// });

// Route::group(['admin' => , function () {
//     Route::get('user/{id}', function ($account, $id) {
//         return $account;
//     });
// });

Route::domain('{account}.localhost')->group(function () {
    Route::get('', function ($account) {
        //
        return $account;
    });
});