<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', 'HomeController@verifyUser');

Route::get("/login", function() {
    return view('login');
});
Route::post("login", "LoginController@login");
Route::get("/logout", "LoginController@logout");

Route::get("/signup", function() {
    return view('signup');
});

Route::post("/signup", "SignUpController@sign");
Route::get("/signup/mail/{q}", "SignUpController@mail");

Route::get('spotify', "HomeController@loadSpotify");
Route::get('songsterr/{q}', "HomeController@searchOnSongsterr");

Route::get("list/", 'ListController@index');
Route::get("list/products/", 'ListController@showProducts');
Route::get("list/details/{q}", 'ListController@singleProduct');

Route::get("product", 'ProductController@index');
Route::get("product/add/{q}", 'ProductController@addToCart');

Route::get("cart", "CartController@index");
Route::get("cart/show", "CartController@showCart");
Route::get("cart/delete/{q}", "CartController@deleteProduct");
Route::get("cart/buy", "CartController@sendOrder");

Route::get("orders", "OrdersController@index");
Route::get("orders/show", "OrdersController@showOrders");


