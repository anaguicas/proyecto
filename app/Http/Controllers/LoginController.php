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
    	if(Auth::attempt(['username'=> $request['email'], 'password' => $request['password']])){
            return Redirect::to('subscriber.inicio');
        }
        Session::flash('message-error', 'datos incorrectos');

        return Redirect::to('landing');
    }
}
