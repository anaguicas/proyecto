<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudioRepo;


class StudioController extends Controller
{
    function showPerformers(){  	
    	 $performers = DB::table('Performers')->get();
    }

    
    public function __construct(StudioRepo $studio){
		$this->StudioRepo = $studio;
	}

	public function Inicio(){
		return view('Studio/inicio');
	}

	public function FormRegister(){
		return view('Studio/registro');
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
