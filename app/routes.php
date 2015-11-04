<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('notifications');
});

Route::resource('notifications', 'NotificationController');

Route::group(array('prefix' => 'api/v1'), function()
{
	Route::get('notification/level/{level}', 'api\v1\NotificationController@importance');
	Route::get('notification/user/{user}', 'api\v1\NotificationController@user');
	Route::delete('notification/delete/{id}', 'api\v1\NotificationController@delete');
	Route::resource('notification', 'api\v1\NotificationController');
});

Route::group(array('prefix' => 'api/v2'), function()
{
	Route::resource('notification', 'api\v2\NotificationController');
});
