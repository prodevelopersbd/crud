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


// Route::get('/students',function(){
// 	return view('students.index');
// });

// Route::get('/student/create',function(){
// 	return view('students.create');
// });
// Route::get('/student/show',function(){
// 	return view('students.show');
// });



Route::group(['namespace'=> 'Student'] , function(){
	// All Student Route
	Route::get('/student','StudentController@index');
	Route::get('/student/create','StudentController@create');
	Route::post('/student/submit','StudentController@submit');
	Route::get('/student/view/{id}','StudentController@view');

});