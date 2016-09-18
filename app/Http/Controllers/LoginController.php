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
			$a = Auth::attempt(['name'=> $request['username'], 'password' => $request['password'], 'is_active' =>'TRUE']);
			if($a){
            	return Redirect::to('subscriber/inicio');
	        }else{
	        	Session::flash('message-error', 'Unregistered user');
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
