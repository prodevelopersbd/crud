<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/demo/{num}/{gu}',function($num,$gu){
	echo "This is demo page $num + $gu";
});



Route::group(['prefix'=> 'user'],function(){
	Route::get('',function(){
		echo "This is user root route!";
	});

	Route::get('edit',function(){
		echo "Edit user info";
	});

	Route::get('delete',function(){
		echo "Delete user info";
	});

	Route::get('update',function(){
		echo "Update user info";
	});

});