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
			$a = Auth::attempt(['name'=> $request['username'], 'password' => $request['password']]);
				var_dump($a);
				die();
			if($a){
            	return Redirect::to('subscriber.inicio');
	        }else{
	        	Session::flash('message-error', 'datos incorrectos');
	        	//return Redirect::to('/');	
	        }	
		}

    	
        
    }
}
