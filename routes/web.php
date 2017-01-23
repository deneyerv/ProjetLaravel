<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::get('/signup', [

    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);

Route::post('/signup', [

    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);


Route::get('/signin', [

    'uses' => 'UserController@getSignin',
    'as' => 'user.signin',
    'middleware' => 'guest'
]);

Route::post('/signin', [

    'uses' => 'UserController@postSignin',
    'as' => 'user.signin',
    'middleware' => 'guest'
]);

route::get('/user/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
]);

route::get('/user/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);

route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart',

]);

route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart',

]);

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

Route::post('searchCode', [


    'uses'=>'ProductController@searchCode',
    'as' => 'searchCode'
 ]);

Route::get('searchNes', [


    'uses'=>'ProductController@searchNes',
    'as' => 'searchNes'
]);

Route::get('searchSnes', [


    'uses'=>'ProductController@searchSnes',
    'as' => 'searchSnes'
]);

Route::get('searchGamecube', [


    'uses'=>'ProductController@searchGamecube',
    'as' => 'searchGamecube'
]);
Route::get('searchN64', [


    'uses'=>'ProductController@searchN64',
    'as' => 'searchN64'
]);
