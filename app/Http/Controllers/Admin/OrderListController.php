<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Category;
use App\Order;
use App\Cart;

class OrderListController extends Controller
{
    function index(){
        $orders=DB::table('orders')->get();        
        return view("admin.dashboard.list_order",["orders"=>$orders]);
    }
    function destroy(Request $req){
    	Order::find($req->id)->delete();
    	return redirect("/list_orders");
    }

}
