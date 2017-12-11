<?php


$namespace = "Ecuadlocation\Http\Controllers";



Route::group(['namespace'=>$namespace, 'prefix'=>'ecuad'],function(){
	
	Route::get('/', 'EcuadController@index');

	Route::get('test', function(){
		return "message";
	});
});