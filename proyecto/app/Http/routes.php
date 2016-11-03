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
//$url = route('nam');

// Generating Redirects...
//return redirect()->route('profile');
//Route::get('/',['as'=> 'nombre','uses'=> 'TestController@test']);

Route::post('/', function () {
    return view('welcome');
   // Route::resource();

});




