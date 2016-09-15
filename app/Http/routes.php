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
    return view('welcome');
});


Route::get('/contracts' , [

	'uses' => 'ContractController@index',
	'as' => 'contracts.hold',
]);

Route::get('/management' , [

	'uses' => 'ManagementController@index',
	'as' => 'management.index',
]);


Route::post('/contracts' , [

	'uses' => 'ContractController@store',
	'as' => 'contracts.store',
]);

Route::delete('/contracts/{idContract}', [
	'uses' => 'ContractController@destroy',
	'as' => 'contracts.destroy',
]);

Route::get('/jobs' , [
	'uses' => 'JobController@index',
	'as' => 'jobs.index',
	]);

Route::auth();

Route::get('/home', 'HomeController@index');
