<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    //
    public function Supplier(){

        return view('supplyer.supplier');

    } 

    public function supplierRegister(){

        return view('supplyer.supp_register');

    } 
    public function supplierLogin(){

        return view('supplyer.supp_login');

    }

    


}