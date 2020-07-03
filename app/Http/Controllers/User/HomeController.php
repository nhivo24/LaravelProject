<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Products;
use App\Category;
use App\Cart;


class HomeController extends Controller
{


  

    function index(){
  
    $id_user = Auth::user();

  $cart = Cart::where('user_id',$id_user)->count();

   

     Session::put('cart',$cart);
     // echo json_encode($cart);
    $products = Products::all();
    $categories = Category::all();
     foreach($products as $product){
        $product->category;     
    }
    
    return view('user.home',['products'=> $products],['categories'=>$categories]);
   }


    function addProduct(){
        return view("admin.product.addProduct");
    }


   function store(Request $request){

        $name =$request->input("name");
        $price =$request->input("price");
        $description =$request->input("description");
        $quantity=$request->input('quantity');
        $image =$request->file("image")->store("public");
        $category = $request->input('category');



        $products= new Products;
        $products->name=$name;
        $products->price=$price;
        $products->description=$description;
        $products->quantity=$quantity;
        $products->image=$image;         
        $products->category_id=$category;
        $products->save();
    
        return redirect("/admin/product/index");
        }

       

 function search(Request $request)
   {   
   $txt = $request->input('search');
   $search = DB::table('products')->where('name','LIKE','%'.$txt.'%')->get();
   return view('user.search',['research'=>$search]);

   }
   function logout(){

      Auth::logout();
      return redirect()->route('home');
    }


    
}
