<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Category;
use App\User;
use App\Http\Requests\addProductRequest;
use App\Comments;

class ProductController extends Controller

{
    // function index(){
    //     $product=DB::table('products')->get();
       
    //     return view("admin.product.index",["product"=>$product]);
    // }

   //  function cart(){
   //   return view("admin.product.cart");
   // }

    function addProduct(){
        $categories = Category::all();

        return view("admin.product.addProduct",['categories'=> $categories]);
    }
    function detail($id){
         $products = Products::find($id);
        $users =User::all();
        $comments = Comments::all();
        foreach($comments as $comment ) {
            $comment->users;   
          }  
          
        return view('admin.product.detail',['products'=>$products],['comments'=>$comments]);
       }

       function addComment($id, Request $request){
          if(Auth::user()){
          $id_user=Auth::user()->id;   
          $message =$request->input("message");
          $comments = new Comments;
          $comments ->message = $message;
          $comments->user_id =$id_user;
          $comments->product_id=$id;
          
          $comments->save();
         return  redirect('/detail/'.$id);
       }else{
       
        return redirect()->route('auth.login',['erro'=>'Muốn thêm hả, Đăng Nhập Đi']);
       }


       }

   //  function shopping_cart($id){
   //       $product=DB::table('product')->where('id','=',$id)->get();
   //      return view('admin.product.cart',['product'=>$product]);
   //     }


function index(){

    $products = Products::all();
     foreach($products as $product){
        $product->category;     
    }
  return view('admin.product.index',['products'=> $products]);
   }

   //  function addPhoto(){
   //  $categories = Category::all();
   //  return view('',['categories'=> $categories]);
   // }
 


    function store(addProductRequest $request){

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
       function sortBy()
      {
        $results = Products::all()->sortBy("price");
        return view("admin.product.index",[ "products" => $results]);
      }
    function sortDesc()
    {

    $results = Products::all()->sortByDesc("price");
    return view("admin.product.index",[ "products" => $results]);
      }

            function destroy($ida){
                DB::table("products")->where('id',$ida)->delete();
                return redirect("/admin/product/index");

            }

    function edit($id){
        $products = Products::find($id);
        $categories = Category::all();
        return view('admin.product.edit_product',['products'=>$products],['categories'=> $categories]);
       }


   function update(addProductRequest $req)
    {    $id=$req->id;
         $products=  Products::find($id);
         $name=$req->input('name');
         $price=$req->input('price');
         $quantity=$req->input('quantity');
         $description=$req->input('description');
         $categories=$req->input('category_id');
         $image=$req->file("image")->store("public");

        $products->name=$name;
        $products->price=$price;
        $products->quantity=$quantity;
        $products->description=$description;
        $products->category_id=$categories;
        $products->image=$image;            
        $products->save();

        return redirect("admin/product/index");
    }
    
 }
function login(){
    return view('login');
}
   
 
?>
