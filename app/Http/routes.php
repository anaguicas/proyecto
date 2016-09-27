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
/*
Route::get('/', function () {
    //return view('welcome');
    return view('landing');
});
*/

/*-------Landing-----------*/
Route::get('/', [

	'as' => 'landing',
    'uses' => 'LandingController@Inicio'
]);

/*-------Login-----------*/
Route::get('login', [

	'as' => 'login',
    'uses' => 'LoginController@Inicio'
]);

Route::post('login', [

	'as' => 'login',
    'uses' => 'LoginController@store'
]);

Route::get('logout', [

	'as' => 'logout',
    'uses' => 'LoginController@logout'
]);

//Route::resource('log','LoginController');

Route::get('SignUp',function(){
	return view('Singup');
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

Route::get('subscriber/edit-profile/{id}',[
	'as' => 'subscriber.editprofile',
	'uses' => 'SubscriberController@getEditar'
]);
Route::put('subscriber/edit-profile/{id}',[
	'as' => 'subscriber.save',
	'uses' => 'SubscriberController@putEditar'
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

Route::get('performer/edit-profile/{id}',[
	'as' => 'performer.editprofile',
	'uses' => 'PerformerController@getEditar'
]);

Route::put('performer/edit-profile/{id}',[
	'as' => 'performer.save',
	'uses' => 'PerformerController@putEditar'
]);

/*---------Studio---------*/

/*Route::group(array('laroute' => false, 'before'=>'auth|users'),function(){
	Route::controller('studio','StudioController',array(
		'getInicio'	=> 'studio.inicio',
		'getRegister'	=> 'studio.register',
		'postRegister'	=> 'studio.saveregister',
		'getEditar'		=> 'studio.editprofile',
		'putEditar'		=> 'studio.save',
		'getPerformers'	=> 'studio.showperformers',
		'deletePerformer'	=> 'studio.removeperformer',
		'getPerformerRegister'	=> 'studio.addperformer',
		'postSavePerformer'		=> 'studio.savePerformer',
		));
});*/

Route::get('studio/inicio', [
	'as' => 'studio.inicio',
    'uses' => 'StudioController@getInicio'
]);


Route::get('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@getRegister'
]);

Route::post('studio-register', [
	'as' => 'studio.register',
	'uses' => 'StudioController@postRegister'
]);

Route::get('studio/edit-profile/{id}',[
	'as' => 'studio.editprofile',
	'uses' => 'StudioController@getEditar'
]);

Route::put('studio/edit-profile/{id}',[
	'as' => 'studio.save',
	'uses' => 'StudioController@putEditar'
]);

Route::post('registro',function(){
	return view('welcome');
});

Route::get('studio/showPerformers',[
    'as'=> 'studio.showperformers',
    'uses' => 'StudioController@getPerformers'
]);

Route::get('studio/removeperformer/{id}',[
    'as'=> 'studio.removeperformer',
    'uses' => 'StudioController@deletePerformer'
]);

Route::get('studio/addPerformer',[

    'as' => 'studio.addperformer',
    'uses' => 'StudioController@getPerformerRegister'
]);

Route::post('studio/addperformer',[
    'as' => 'studio.savePerformer',
    'uses' => 'StudioController@postSavePerformer'
]);

/*----------Admin--------------*/

Route::get('Admin/inicio',[
	'as'	=> 'admin.inicio',
	'uses'	=> 'AdminController@getInicio'
]);






