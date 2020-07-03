<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Products;
use App\Category;
use App\Order;
use App\Cart;

class OrderController extends Controller
{

    function index(){       
    	 $orders = Order::all();
    	return view("user.orders",['orders'=>$orders]);
    }
	function order(Request $request){
        $id_user=Auth::user()->id;

        $fname =$request->input("fname");
        $lname =$request->input("lname");
        $address =$request->input("address");
        $city =$request->input("city");
        $phone =$request->input("phone");
        $email =$request->input("email");
        $cardtype =$request->input("cardtype");
           
        $orders= new Order;
        $orders->user_id =$id_user;
        $orders->fname=$fname;
        $orders->lname=$lname;
        $orders->address=$address;
        $orders->city=$city;
        $orders->phone=$phone;
        $orders->email=$email;
        $orders->cardtype=$cardtype;

       $cart = Cart::where('user_id',$id_user)->get();

        foreach ($cart as $carts) {
            $carts->products;
        }
          foreach($cart as $carts){
            foreach ($carts->products as $product) {

                $arrayProduct[] = array(
                    'image'=>$product->image,
                    'name' =>$product->name, 
                    'quantity' =>$carts->quantity, 
                    'price' =>$product->price, 

                );

            }
           
          }
    $orders->total=Session::get('total');
    $detail=json_encode($arrayProduct);
    $orders->detail=$detail; 
    
    $request->session()->forget('coupon');

    $orders->save();
   foreach ($cart as $carts ) {
        Cart::find($carts->id)->delete();
    }
   return redirect("/home")->with('status','Check out sussessful!');
         
}
}
