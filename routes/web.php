<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return redirect('tasks');
});

Route::group(['prefix' => 'tasks'], function() {

	Route::get('/', 'TasksController@index');
	
	Route::get('{task}/edit', 'TasksController@showEditForm');
	
	Route::post('{task}/update', 'TasksController@saveEdits');
	
	Route::get('create', 'TasksController@showCreateForm');
	
	Route::post('create', 'TasksController@createTask');

	Route::post('{task}/delete', 'TasksController@deleteTask');

});
