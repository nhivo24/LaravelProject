<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function index(){
    	$categories = Category::all();
    	foreach ($categories as $category) {
    		$category->name;
    	}
    	return view('user.home',['categories'=>$categories]);
    }
}