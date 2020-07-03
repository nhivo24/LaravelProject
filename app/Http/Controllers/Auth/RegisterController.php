<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\registerRequest;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
   

    function addUser(){
        $users = User::all();

        return view("auth.register",['users'=> $users]);
    }
	function register(registerRequest $request){

        $name =$request->input("name");
        $username=$request->input("username");
        $password=$request->password;
        $hashedPassword = Hash::make($password);
      

        $users= new User;
        $users->name=$name;
        $users->username=$username;
        $users->password=$hashedPassword;
        $users->role='user';

        $users->save();
    
        return redirect("auth/login")->with('status', 'Register sussess!');
 

}

}
