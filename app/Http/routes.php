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

Route::get('/', [
    'as' => 'index', 
    'uses' => 'MainController@index'      
]);

Route::get('/foodscout', [
    'as' => 'foodScout', 
    'uses' => 'MainController@foodScout'      
]);

Route::get('/angularone', [
    'as' => 'angularOne', 
    'uses' => 'MainController@angularOne'      
]);
