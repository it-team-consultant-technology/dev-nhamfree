<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    //

    public function supplierList(){
    	return "student List";
    }
    
    public function supplier(){
    	return "New supplier Form";
    }

    public function updateSupplier(){
    	return "update supplier ";
    }

    public function deleteSupplier(){
        return "delete supplier ";
    }


}