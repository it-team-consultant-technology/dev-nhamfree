<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
class SupplierController extends Controller
{
    //
    public function Supplier(){
        return view('supplier.supplier');
    } 

    public function supplierRegister(){
        return view('supplier.supplier_register');
    } 

    public function createSupplier(Request $req){

        $addUser = new User;
        $addUser->first_name = $req->first_name;
        $addUser->last_name  = $req->last_name;
        $addUser->fullname   = $req->first_name."". $req->last_name;
        $addUser->email      = $req->email;
        $addUser->password   = bcrypt($req->password);
        $addUser->password_text   = $req->password;
        $addUser->phone      = $req->phone;
        $addUser->gender         = $req->gender;
        if($addUser->save()){
            $status = "success";
            $message = "<strong> $req->first_name  $req->last_name </strong> Supplier Successfully Registerd";
        }else{
            $status = "warning";
            $message = "Supplier not Registerd";
        }

        return back()->with(["message"=>$message, "status"=> $status]);

    }

    public function supplierLogin(){

        return view('supplier.supplier_login');
    }

    


}