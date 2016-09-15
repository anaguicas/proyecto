<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    public function Inicio(){
    	return view('login');
    }

    public function validation(){
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
}
