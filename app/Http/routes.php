<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('home',function() {
	return view('index');

});

//Reister Kankor Students 
Route::get('registerKankor',function(){
	return view('kankorRegister');
});

//Insert Kankor students number
Route::get('kankorNumber','kankorController@kankorNumber');
	

Route::get('student',function() {
	return view('student_list');
});
