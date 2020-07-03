<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
	 function addUser(){
        return view("admin.dashboard.addUser");
    }

    function index(){
        $users=DB::table('users')->get();
        return view("admin.dashboard.list_user",["users"=>$users]);
    }

    function store(Request $request){
        $username =$request->input("username");
        $name =$request->input("name");
        $users= new User;
        $users->name=$name;
        $users->username=$username;
        $users->password=$hashedPassword;

        $users->save();
       
        return redirect("admin/dashboard/index");
        }
    function destroy($ida){
        DB::table("users")->where('id',$ida)->delete();
        return redirect("admin/users/index");

    }   
 }

?>
