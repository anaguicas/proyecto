<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SubscriberRepo;
use App\Repositories\UsersRepo;

use Session;
use Redirect;

class AdminController extends Controller{

	public function getInicio(){		
		
		return view('Admin/inicio');	
		
	}

	public function getApplications(){
		return view('Admin/solicitudes');
	}
}