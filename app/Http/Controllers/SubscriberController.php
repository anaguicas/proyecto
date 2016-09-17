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
			'city' 					=> 'required',
			'country' 				=> 'required',
			'username'				=> 'required',
			'email' 				=> 'required|email|unique',		
			'password' 				=> 'required|min:6|confirmed',
			'password_confirmation'	=> 'required|min:6'				
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
			
			$datos_user = array(
			'username' 	=> $request->input('username'),
			'email'		=> $request->input('email'),
			'password'	=> $request->input('password')
			);

			$this->UsersRepo->addUser($datos_user);

			$user = $datos_user['email'];
		
			$performer_user = $this->UsersRepo->findUser($user)->first()->id;	

			$datos_subscriber = array(
			'name'					=> $request->input('name'),
			'last_name'				=> $request->input('last_name'),
			'identification'		=> $request->input('identification'),
			'city'					=> $request->input('city'),
			'country'				=> $request->input('country'),
			'username' 				=> $request->input('username'),							
			'id_user'				=> $performer_user
			);
		}
	}
}