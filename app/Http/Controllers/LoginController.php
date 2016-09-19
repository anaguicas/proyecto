<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;
use App\Http\Requests;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function Inicio(){
    	return view('login');
    }

    public function Validation(){
    	$validation = validator::make($request->all(), [
			'username'				=> 'required',		
			'password' 				=> 'required|alphanum|min:5'	
			]);

    	if($validation->fails()){					
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{			
			$username			 	= $request->input('username');
			$password				= $request->input('password');
		}
    }

    public function store(LoginRequest $request){

    	$validation = validator::make($request->all(), [
			
			'username'				=> 'required',
			'password' 				=> 'required'				
			]);

    	if($validation->fails()){					
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{

			//performer
			if(Auth::attempt(['name'=> $request['username'], 'password' => $request['password'], 'user_type' => 1, 'is_active' =>'TRUE'])){
            	return Redirect::to('performer/inicio');
	        }else{

	        	//suscriptor
				if(Auth::attempt(['name'=> $request['username'], 'password' => $request['password'], 'user_type' => 2, 'is_active' =>'TRUE'])){
	            	return Redirect::to('subscriber/inicio');
		        }else{
		        	//studio
			        if(Auth::attempt(['name'=> $request['username'], 'password' => $request['password'], 'user_type' => 3, 'is_active' =>'TRUE'])){
		            	return Redirect::to('studio/inicio');
			        }else{
			        	Session::flash('message-error', 'Unregistered user 3');
			        	return Redirect::to('login');	
			        }
		        }

	        	Session::flash('message-error', 'Unregistered user 1');
	        	return Redirect::to('login');	
	        }

			

	        
		}

    	/*
	if($validation->fails()){					
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{
			$a = Auth::attempt(['name'=> $request['username'], 'password' => $request['password']]);
			if($a){
				if(Auth::attempt(['is_active' =>'TRUE'])){
					//usuario con permisos
            		return Redirect::to('subscriber/inicio');
				}else{	
						//usuario registrado inactivo
						Session::flash('message-error', 'User without permissions');
	        			return Redirect::to('login');	
				}

	        }else{
	        	//no registrado
	        	Session::flash('message-error', 'Unregistered user');
	        	return Redirect::to('login');	
	        }	
		}
    	*/
        
    }

    public function logout(){
    	Auth::logout();
    	return Redirect::to('/');
    }
}
