<?php

Auth::routes();

Route::get('/','PublicController@getHome');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('register', 'PublicController@getRegister');
Route::post('registration', 'PublicController@postRegister');


//user
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
	
	Route::get('all',['middleware'=>'auth','uses'=>'PublicController@getAlluser']);
	Route::get('allData',['middleware'=>'auth','uses'=>'PublicController@getAlluserData']);

	Route::get('update/{user_id}',['middleware' => 'auth', 'uses' => 'PublicController@getEditUser']);
	Route::post('update/{user_id}',['middleware' => 'auth', 'uses' => 'PublicController@postEditUser']);

	 Route::get('delete/{user_id}',['middleware'=>'auth','uses'=>'PublicController@getDelete']);
});
