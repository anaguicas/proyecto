<?php

use App\Http\Request\RegistroFormRequest;
use App\Http\Controllers\Controller;
use App\Http\Request;
use App\Repositories\PerformerRepo;


class FormularioPerformerController extends Controller{

	public function _construct(){
		$this->PerformerRepo = New PerformerRepo();
	}

	public function Register(Request $request){

		$rules=array(
			'name' => 'required',
			'last_name' => 'required',
			'identification' => 'required|num',
			'photo_identification' => 'required',
			'city' => 'required',
			'country' => 'required',
			'alias' => 'required',	
			'email' => 'required|email|unique',		
			'password' => 'required|alphanum|min:3'
			);

		$errors = array(			
			'required' => 'El campo :attribute es obligatorio',
			'min' => 'El campo :attribute no puede tener menos de :min carácteres',
			'email' => 'El campo :attribute debe ser un email válido',
			'unique' => 'El email ingresado ya existe en la base de datos'
			);

		$validator = validator::make(Input::all(),$rules,$errors);

		if($validator->passes()){
			/*return Redirect::to('registro')
				->withErrors($validator)
				->withInput(Input::except('password'));*/
			$datos = array(
					'name'		=> \Input::get('name'),
					'last_name'	=> \Input::get('last_name'),
					'username' 	=> \Input::get('username'),
					'email'		=> \Input::get('email'),
					'password'	=> \Input::get('password'),
					''
					);
		}else{
			$errors = $validator->getErrors();
			return \Redirect::back()->withInput(Input::except('password'))->withErrors($errors)->width('errores','Existen campos inválidos');
	}
}
}