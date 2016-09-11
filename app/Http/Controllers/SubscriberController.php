<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\SubscriberRepo;


class SubscriberController extends Controller{
	

	public function __construct(SubscriberRepo $subscriber){
		$this->SubscriberRepo = $subscriber;
	}

	public function Inicio(){
		return view('subscriber/inicio');
	}

	public function FormRegister(){
		return view('subscriber/registro');
	}

	public function Register(Request $request){


		$validation = validator::make($request->all(), [
			'name'			 		=> 'required',
			'last_name' 			=> 'required',
			'identification' 		=> 'required|num',
			'username'				=> 'required',
			'email' 				=> 'required|email|unique',		
			'password' 				=> 'required|alphanum|min:5',				
			'city' 					=> 'required',
			'country' 				=> 'required'	
			]);

		/*$errors = array(			
			'required'  => 'El campo :attribute es obligatorio',
			'min' 		=> 'El campo :attribute no puede tener menos de :min carácteres',
			'email' 	=> 'El campo :attribute debe ser un email válido',
			'unique' 	=> 'El email ingresado ya existe en la base de datos'
			);*/

		if($validation->fails()){			
			return redirect()->back()->withInput(Input::except('password'))->withErrors($validation->errors());			
		}else{
			$name 					= $request->input('name');
			$last_name 				= $request->input('last_name');
			$identification 		= $request->input('identification');
			$photo_identification 	= $request->input('photo_identification');
			$city 					= $request->input('city');
			$country 				= $request->input('country');
			$alias 					= $request->input('alias');
			$email 					= $request->input('email');
			$password 				= $request->input('password');


	}
}
}