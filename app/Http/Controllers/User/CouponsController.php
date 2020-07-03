<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Coupon;
use Illuminate\Support\Facades\Session;
use App\Cart;

class CouponsController extends Controller
{
    function index(Request $request){

    	$coupons=DB::table('coupons')->get();
        return view("admin.dashboard.coupons",["coupons"=>$coupons]);
		 // $coupon = Coupon::where('code',$request->coupon_code)->first();
   //  	if(! $coupon){
   //  		return redirect('/cart')->withErrors('Invalid coupon code. Please try again.');
   //  	}
   //  	session()->put('coupons',[
   //  		'name'=>$coupon->code,
   //  		'discount'=>$coupon->discount(Cart::Subtotal()),

   //  	]);
   //  	return redirect('/cart')->with('sussess_message','Coupon has been applied');
    }

    function store(Request $request){
            $code = strtoupper($request->input('coupon_code'));
            $coupons = Coupon::all();

			     Session::forget('coupons');
            foreach ($coupons as $coupon) {

                if($code == $coupon->code){

                    Session::put('coupons',$coupon->code);

                    Session::put('percent_off',$coupon->percent_off);

          			
   					return redirect('/cart')->with('status','Coupon has been applied');
					}
          
     			else{

     				return redirect('/cart')->with('status','Invalid coupon code. Please try again.');
     			}             
               
        }
}
}
