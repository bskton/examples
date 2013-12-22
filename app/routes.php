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
	return View::make('hello');
});

Route::group(array('before' => 'guest'), function () 
{
    Route::get('login', array(
        'as' => 'auth.login', 
        'uses' => 'AuthController@getLogin'
    ));

    Route::post('login', array(
        'before' => 'csrf',
        'uses' => 'AuthController@postLogin'
    ));
});

Route::group(array('before' => 'auth'), function ()
{
    Route::get('admin', array(
        'as' => 'admin',
        'uses' => 'HomeController@getAdmin',
    ));

    Route::get('logout', array(
        'as' => 'auth.logout',
        'uses' => 'AuthController@getLogout'
    ));
}); 
