<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Category;
use App\Cart;
use App\Discount;

class CartsController extends Controller
{
	 function index(){
    	if(Auth::user()){
    		$category = Category::all();
    		$id_user =Auth::user()->id;
    		$carts= Cart::where('user_id',$id_user)->get();
    		foreach ($carts as $cart) {
    			$cart->products;
    		}
    		// echo json_encode($carts);
    		// 	echo "<pre>".json_encode($carts, JSON_PRETTY_PRINT)."</pre>";
    	return view('user.cart',['categories'=>$category,'cart'=>$carts]);

    	}
    	else{
    		return redirect()->route('auth.login',['erro'=>'Muốn thêm hả, Đăng Nhập Đi']);
    	}
    }

    function store($id_product) {
    	if(Auth::user()){
    		$id_user=Auth::user()->id;
    		$cart = Cart::where('product_id',$id_product)->first();
    		if($cart){
    			Cart::find($cart->id)->update(['quantity'=>$cart->quantity+1]);
    		}else{
    			$carts = new Cart;
    			$carts->user_id =$id_user;
    			$carts->product_id=$id_product;
    			$carts->quantity = 1;
    			$carts->save();
    		}
    	 return redirect("/cart")->with('status','Thêm vào giỏ hàng thành công!');;
    	}
        else
        {
    		return redirect()->route('auth.login',['erro'=>'Muốn thêm hả, Đăng Nhập Đi']);
    	}

    }
    function destroy($ida){
            
       Cart::find($ida)->delete();
        return redirect("cart");
    }

    function update($id, Request $request){
        $qty = $request->number;
        $cart = Cart::find($id);
        if($cart->quantity==0){
             $cart->delete();
         }else{
             $cart->update(['quantity'=>$cart->quantity+$qty]);   
         }
        return redirect('/cart');

    }


}

