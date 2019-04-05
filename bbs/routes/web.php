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

Route::get('/', 'bbs\home\IndexController@index');

Route::group(['prefix'=>'bbs/home','namespace'=>'bbs\home'],function(){
	Route::get('login.html','IndexController@login');
	Route::get('add.html','IndexController@addUser');
	Route::post('store.html','IndexController@store');
	Route::post('loginCheck.html','IndexController@loginCheck');
	Route::get('bbssession-{id}','IndexController@bbssession');
	Route::get('create.html','IndexController@create');
	Route::post('insertTopic.html','IndexController@intTc');
	Route::get('outLogin.html','IndexController@outLogin');
	Route::get('userInfo-{TUID}','IndexController@userInfo');
});

Route::get('/admin','bbs\admin\IndexController@login');


Route::group(['prefix'=>'bbs/admin','namespace'=>'bbs\admin'],function(){
	Route::get('login.html','IndexController@login');
	Route::post('loginCheck.html','IndexController@loginCheck');
});