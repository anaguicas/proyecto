<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudioRepo;
use App\Repositories\UsersRepo;
use App\Repositories\CreditCardRepo;
use Illuminate\Support\Facades\Redirect;



class StudioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    
    public function __construct(){
		$this->studioRepo 	= New StudioRepo;
		$this->usersRepo 	= New UsersRepo;
		$this->creditRepo	= New CreditCardRepo;
	}

    public function showPerformers(){

        $consulta = $this->studioRepo->listPerformers();
        //dump ($consulta); die;
        return view('Studio/listPerformers', ['performers' => $consulta]);
    }

	public function Bank()
    {
        $bank = array(
            'Davivienda' => 'Davivienda',
            'Bancolombia' => 'Bancolombia',
            'Banco de Bogota' => 'Banco de Bogotá'
        );

        return $bank;
    }

	public function Inicio(){
		return view('Studio/inicio');
	}

	public function FormRegister(){
		$bank	 = $this->Bank();
		return view('Studio/registro', ['bank' => $bank]);
	}

	public function Register(Request $request){

		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
			'name'					=> 'required|unique:users',		
			'email'					=> 'required|email|max:255|unique:users',
			'password' 				=> 'required|min:6|confirmed',
			'password_confirmation'	=> 'required|min:6',
			'studio_owner'			=> 'required',
			'number' 				=> 'required',
			'bank'					=> 'required'	
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
				'username' 	=> $request->input('name'),
				'email'		=> $request->input('email'),
				'user_type'	=> 3,
				'password'	=> $request->input('password')
				);

			$this->usersRepo->addUser($datos_user);

			$user = $datos_user['email'];

			$studio_user = $this->usersRepo->findUser($user)->first()->id;	


			$datos_studio = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),				
				'id_user'				=> $studio_user		
				);

			$datos_card = array(
				'bank'					=> $request->input('bank'),
				'number'				=> $request->input('number'),
				'id_user'				=> $studio_user,
				'bank'					=> $request->input('bank')
				);

			$credit_card = $this->creditRepo->addCreditCard($datos_card);			

			if($this->studioRepo->AddStudio($datos_studio)){
				return redirect()->back()->with('message','Successful.');
			}else{
				return redirect()->back()->with('error','There was a problem. Pleas try again');
			}
		}
	}

	public function FormProfile(){
		$bank	 = $this->Bank();
		$user = 'studio prueba';
		$studio = $this->studioRepo->editProfile($user);		
		/*var_dump($studio);
		die();*/
		/*$studio_name 	= $studio[0]->name;
		$description 	= $studio[0]->description;
		$email			= $studio[0]->email;
		$username		= $studio[0]->name;
		$studio_owner	= $studio[0]->responsible;
		$number			= $studio[0]->number;
		$bank 			= $studio[0]->bank;*/
		
		return view('Studio/editarPerfil', compact('studio'));
		//return view('Studio/editarPerfil', ['studio' => $studio]);
	}

	public function saveProfile(){
		$validation = validator::make($request->all(), [						
			'email' 				=> 'email|unique',	
			'password' 				=> 'alphanum|min:5',	
			]);

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

			$studio_user = $this->UsersRepo->findUser($user)->first()->id;	

			$datos_studio = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),
				'number'				=> $request->input('number'),
				'bank'					=> $request->input('bank'),
				'id_user'				=> $studio_user
				);

			if($this->studioRepo->AddStudio($datos)){
				return redirect()->back()->with('message','User update successful.');
			}else{
				return redirect()->back()->with('error','There was a problem updating user information. Please try again');
			}
		}
	}

}
