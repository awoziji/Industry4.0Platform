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


Route::group(['middleware' => ['web']], function(){

	Route::get('/', function () {

	    return view('welcome');
	});

	Route::auth();

	Route::get('/home', 'HomeController@index');
	Route::get('/data/status', 'DataController@status');
	Route::get('/data/machines/{machine_index}', 'DataController@monitor');
	Route::post('/data/machines/{machine_index}','DataController@ajax_monitor');

});