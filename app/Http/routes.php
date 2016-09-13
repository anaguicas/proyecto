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

Route::get('registro-performer',function(){
	return view('performers/registro');
});

    Route::get('subscriber/inicio', [
	'as' => 'subscriber.inicio',
    'uses' => 'SubscriberController@Inicio'
]);

Route::get('/performer-register',[
	'as' => 'performer.register',
	'uses' => 'PerformerController@FormRegister'
]);

Route::get('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@FormRegister'
]);

Route::post('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@Register'
]);

Route::get('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@FormRegister'
]);

Route::post('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@Register'
]);

Route::get('studio-performerlist',[
    'as' => 'studio.performerlist',
    'uses' => 'StudioController@showPerformers'
]);

Route::post('success', [
        'as' => 'success'
]);
Route::post('registro',function(){
	return view('welcome');
});

Route::get('subscriber-register',function(){
	return view('subscriber/registro');
});




