<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login',"Auth\LoginController@index")->name("auth.login");

Route::get('/auth/register',"Auth\RegisterController@addUser")->name("auth.register");

Route::post('/auth/login',"Auth\LoginController@login");

Route::post('/auth/register',"Auth\RegisterController@register");



Route::get('/admin/dashboard/index',"Admin\DashboardController@add")->name("admin.dashboard.index")->middleware('login');

Route::get('/home',"User\HomeController@index")->name("home");

//Route::get('/header',"User\HomeController@category");

Route::get('/auth/logout',"User\HomeController@logout");



Route::get('/product',"Admin\ProductController@add")->name("admin.product");

Route::post('/product',"Admin\ProductController@store");

Route::DELETE('/admin/product/index/{id}',"Admin\ProductController@destroy");

Route::get('/admin/dashboard/index',"Admin\DashboardController@manage")->middleware('login');


Route::post('admin/product/index/update','Admin\ProductController@update');

Route::get('admin/product/addProduct',"Admin\ProductController@addProduct");

Route::post('admin/product/store',"Admin\ProductController@store");

Route::get('/admin/product/index',"Admin\ProductController@index");

Route::get('/admin/product/index/{id}',"Admin\ProductController@edit");

Route::DELETE('/admin/users/{id}',"Admin\UserController@destroy");

//Route::get('/admin/dashboard/index',"Admin\DashboardController@manage");


Route::get('admin/users/addProduct',"Admin\UserController@addUser");

Route::get('/admin/users/index',"Admin\UserController@index");

Route::post('user/store',"Admin\HomeController@store");

Route::get('/admin/user/addProduct',"Admin\HomeController@addProduct");


//search
// Route::get('/search', 'HomeController@search');

Route::post('/user/search', 'User\HomeController@search');

Route::get('/detail/{id}',"Admin\ProductController@detail");

Route::get('/admin/product/cart',"Admin\ProductController@cart");

Route::get('/admin/product/cart/{id}',"Admin\ProductController@shopping_cart");



// Cart
// Route::get('/home/{id}',['as'=>'themgiohang','uses'=>'HomeController@getAddtoCart']);	


Route::get('/cart',"User\CartsController@index");

Route::post('/cart/{id}',"User\CartsController@store");

Route::delete('/cart/{id}',"User\CartsController@destroy");

Route::post('/update/{id}','User\CartsController@update');

//Order

Route::get('/orders',"User\OrderController@index");

Route::post('/orders',"User\OrderController@order");

Route::get('/list_orders',"Admin\OrderListController@index");

Route::DELETE('/list_orders',"Admin\OrderListController@destroy");

//Personal

Route::get('/personal',"User\PersonalController@personal");

Route::get('/changePassword/{id}',"User\PersonalController@edit");

Route::post('/changePassword','User\PersonalController@changePassword')->name('changePassword');

Route::get('user/list_orders',"Admin\OrderListController@index");

Route::get('/view_order',"User\ViewOrderController@index");

//Discount
Route::get('/coupons',"User\CouponsController@index");

Route::post('/coupons',"User\CouponsController@store");


//sort

Route::get('/products/sortBy',"Admin\ProductController@sortBy");
Route::get('/products/sortDesc',"Admin\ProductController@sortDesc");



Route::get('/404',function(){
	return abort(404);
});

//comment
Route::post('/detail/{id}',"Admin\ProductController@addComment");