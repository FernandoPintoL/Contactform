<?php
Route::group(['namespace' => 'Fpl\Administrador\Http\Controllers'], function(){
		Route::get('/', function () {
		    return view('administrador::welcome');
		});
		Route::get('user','AdministradorController@getAdm');
		Route::get('admin', 'AdministradorController@index')->name('administrador');
		Route::post('admin','AdministradorController@send');
});