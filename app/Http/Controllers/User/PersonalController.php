<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\User;


class PersonalController extends Controller
{
   function personal(Request $req){
	  $categories = Category::all();	  
	  $users = User::find(Auth::user()->id);
	  return view('user.personal',['categories'=>$categories],['users'=>$users]);
 	}
 	function edit(Request $req){
 		 $users = User::find(Auth::user()->id);
 		 $categories = Category::all();
 		 $users = $req->input('password');	  
 		 return view('user.changePassword',['users'=>$users],['categories'=>$categories]);

 	}

       public function changePassword(Request $request){

        if (!(Hash::check($request->get('password'), Auth::user()->password))) {
          
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('password'), $request->get('new-password')) == 0){
           
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

      
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

    
 }



