<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bbs.home.index');
});

Route::group(['prefix'=>'bbs/home','namespace'=>'bbs\home'],function(){
	Route::get('login.html','IndexController@login');
	Route::get('add.html','IndexController@addUser');
	
});