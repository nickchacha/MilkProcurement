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

//Routes Model Bidding
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');


Route::get('/', 'HomeDashboardController@index');

Route::group(['before' => 'auth'], function()
{
 
#User Roles Management
	
	Route::get('roles/{role}/show', 'AdminRoleController@getShow');
	Route::get('role/{role}/edit', 'AdminRoleController@getEdit`');
	Route::get('role/{role}/edit', 'AdminRoleController@postEdit');
	Route::get('role/{role}/delete', 'AdminRoleController@getDelete');
	Route::get('role/{role}/delete','AdminRoleController@postDelete');
	Route::get('role', 'AdminUsersController');
#Admin Dashboard 
	//Route::controller('/', 'AdminDashboardController');

});
//

// Confide routes\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('users/create', 'UsersController@create');
Route::post('users','UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
Route::controller('users', 'UsersController');
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
