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
Route::get('/prueba', function(){
	return "Hola";
});

Route::get('age/{edad?}','BasicController@age');
/*Route::post('/post',function(){
	return "post";
});*/
Route::get('name/{nombre}','BasicController@name')->name('nombre');
// Generating URLs...
//Route::resource('rest', 'RestController');
//Route::match(['get','post'],'/res', 'RestController');

// Generating Redirects...
//return redirect()->route('profile');

/*Route::get('/', function () {
    return view('welcome');
});*/


//Route::match(['get','post'] ,'rest', 'RestController');
Route::match(['get', 'post'], 'res', 'RestController@store');




