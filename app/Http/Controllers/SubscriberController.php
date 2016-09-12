<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
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
		$country = array(
		'Colombia');
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
			'country' 				=> 'required',
			'number'				=> 'required|num',
			'security_code'			=> 'required'	
			]);

		/*$errors = array(			
			'required'  => 'El campo :attribute es obligatorio',
			'min' 		=> 'El campo :attribute no puede tener menos de :min carácteres',
			'email' 	=> 'El campo :attribute debe ser un email válido',
			'unique' 	=> 'El email ingresado ya existe en la base de datos'
			);*/

		if($validation->fails()){					
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{
			/*$name 					=\Input::get('name');
			$last_name 				=\Input::get('last_name');
			$identification			=\Input::get('identification');
			$username				=\Input::get('username');
			$email 					=\Input::get('email');
			$password				=\Input::get('password');
			$city					=\Input::get('city');
			$number					=\Input::get('number');
			$due_date 				=\Input::get('due_date');
			$security_code			=\Input::get('securty_code');*/
			
			$name 					= $request->input('name');
			$last_name 				= $request->input('last_name');
			$identification 		= $request->input('identification');
			$username			 	= $request->input('username');
			$email 					= $request->input('email');
			$password				= $request->input('password');
			$city 					= $request->input('city');
			$country				= $request->input('country');
		}
	}
}