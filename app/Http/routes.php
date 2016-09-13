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

Route::get('inicio',function(){
	return view('landing');
});

Route::get('SingUp',function(){
	return view('SingUp');
});

/*-------Subscriber-----------*/
Route::get('subscriber/inicio', [
	'as' => 'subscriber.inicio',
    'uses' => 'SubscriberController@Inicio'
]);

Route::get('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@FormRegister'
]);

Route::post('subscriber-register',[
	'as' => 'subscriber.register',
	'uses' => 'SubscriberController@Register'
]);

/*--------Performer-----------*/

Route::get('performer/inicio', [
	'as' => 'performer.inicio',
    'uses' => 'PerformerController@Inicio'
]);

Route::get('performer-register',[
	'as' => 'performer.register',
	'uses' => 'PerformerController@FormRegister'
]);

Route::post('performer-register',[
	'as' => 'performer.register',
	'uses' => 'PerformerController@Register'
]);

/*---------Studio---------*/
Route::get('studio/inicio', [
	'as' => 'studio.inicio',
    'uses' => 'StudioController@Inicio'
]);

Route::get('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@FormRegister'
]);

Route::post('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@Register'
]);

Route::get('studio/edit-profile',[
	'as' => 'studio.editprofile',
	'uses' => 'StudioController@FormProfile'
]);

Route::get('studio/showPerformers', 'StudioController@showPerformers');