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
Route::get('/', 'FrontController@index', 'FrontController@showTag');
Route::get('apero/{id}', 'FrontController@showApero');


Route::resource('search', 'SearchController');

Route::any('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::group(['prefix' => 'front'], function() {

    Route::resource('apero', 'AperoFrontController');
});

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function() {
    Route::resource('apero', 'AperoAdminController');
    
});

Route::group(['prefix' => 'admin'],  function() {
    Route::resource('publishstatus', 'PublishController');

});
