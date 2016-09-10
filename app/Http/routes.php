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
    //return view('welcome');
    return view('landing');
});

Route::get('inicio', function () {
    return view('performers/inicio');
});

Route::get('/registro-performer',function(){
	return view('performers/registro');
});

Route::get('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@FormRegister'
]);

Route::post('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@Register'
]);

Route::post('success', [
        'as' => 'success'        
]);

Route::get('studio/showPerformers', 'StudioController@showPerformers');