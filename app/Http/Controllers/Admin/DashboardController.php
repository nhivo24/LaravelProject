<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
	function add(){
		   return view("admin.dashboard.index");
	}
    function index(){
    	
    	 $product=DB::table('products')->get();
       
        return view("admin/product/index",["product"=>$product]);

    }
    function manage(){
    	 return view("admin.dashboard.index");
    }
    function show(){

    	return view("admin.dashboard.admin_page");
    }

    
    }

