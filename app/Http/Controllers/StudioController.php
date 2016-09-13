<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudioRepo;



class StudioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function showPerformers(){

        $ListaPerformers = new StudioRepo();
        $consulta = $ListaPerformers->listPerformers();
        dump ($consulta); die;
        return view('Studio/performerlist');


    }

    
    public function __construct(StudioRepo $studio){
		$this->studioRepo = $studio;
	}

	public function Inicio(){
		return view('Studio/inicio');
	}

	public function FormRegister(){
		return view('Studio/registro');
	}

	public function Register(Request $request){


		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
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
			$datos = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'email '				=> $request->input('email'),
				'password'				=> $request->input('password'),
				'studio_owner'			=> $request->input('studio_owner'),
				'number'				=> $request->input('number'),
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
