<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Category;
use App\Order;
use App\Cart;

class ViewOrderController extends Controller
{
     function index(){
     $id_user=Auth::user()->id;
     $categories = Category::all();

     $orders=DB::table('orders')->where('user_id',$id_user)->get(); 

        return view("user.vieworder",["orders"=>$orders],['categories'=> $categories]);
    }

    // function destroy(Request $req){
    // 	Order::find($req->id)->delete();
    // 	return redirect("/list_orders");
    // }
}
