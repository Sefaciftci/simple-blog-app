<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function registerFunc(Request $request){
        $request->validate([
            "name"=>["required" , "min:5" , "max:30"],
            "email" => [ "required",'email:rfc,dns'],
            "password" => ["required" , "min:6" , "max:20"]
        ]);
        User::create([
            "name"=>$request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);
        return "kayıt alındı";
    }
    
}
