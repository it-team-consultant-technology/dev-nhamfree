<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    //
    public function Supplier(){

        return view('supplier.supplier');

    } 

    public function supplierRegister(){

        return view('supplier.supplier_register');

    } 
    public function supplierLogin(){

        return view('supplier.supplier_login');

    }

    


}