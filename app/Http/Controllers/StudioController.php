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



class StudioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPerformers(){

        $ListaPerformers = new StudioRepo();
        $consulta = $ListaPerformers->listPerformers();
        //dump ($consulta); die;
        return view('Studio/listPerformers', ['performers' => $consulta]);


    }

    
    public function __construct(){
		$this->studioRepo = New StudioRepo;
	}

	public function Bank(){

		$bank = array(
			'Davivienda' => 'Davivienda',
			'Bancolombia' => 'Bancolombia',
			'Banco de Bogota' => 'Banco de Bogotá'
			);

		return $bank;
    public function __construct(StudioRepo $studio){
		$this->studioRepo = $studio;
	}

	public function Inicio(){
		return view('Studio/inicio');
	}

	public function FormRegister(){
		$bank	 = $this->Bank();
		return view('Studio/registro', ['bank' => $bank]);
		return view('Studio/registro');
	}

	public function Register(Request $request){


		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
			'email' 				=> 'required|email|unique',
			'username'				=> 'required',		
			'email' 				=> 'required|email|unique',
			'password' 				=> 'required|alphanum|min:5',
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
				'username' 	=> $request->input('username'),
				'email'		=> $request->input('email'),
				'password'	=> $request->input('password')
				);

			$this->UsersRepo->addUser($datos_user);

			$user = $datos_user['email'];

			$studio_user = $this->UsersRepo->findUser($user)->first()->id;	

			$datos_studio = array(
			$datos = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),
				'number'				=> $request->input('number'),
				'bank'					=> $request->input('bank'),
				'id_user'				=> $studio_user
				'bank'					=> $request->input('bank')
				);

			if($this->studioRepo->AddStudio($datos)){
				return redirect()->back()->with('message','Successful.');
			}
			return redirect()->back()->with('message','There was a problem.');
		}
	}

	public function FormProfile(){
		return view('Studio/editarPerfil');
	}

}
