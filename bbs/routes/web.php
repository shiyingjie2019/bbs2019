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
    return view('welcome');
});

Route::group(['prefix'=>'database/query','namespace'=>'database\query'],function(){
	Route::get('index.html','IndexController@index');
	Route::get('edit-{id}','IndexController@edit');
	Route::get('destroy-{id}','IndexController@destroy');
});
