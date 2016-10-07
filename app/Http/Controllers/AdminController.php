<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PqrRepo;
use App\Repositories\UsersRepo;
use App\Repositories\PerformerRepo;

use Session;
use Redirect;

class AdminController extends Controller{

	public function __construct(){
		$this->PqrRepo 	= New PqrRepo();
		$this->usersRepo 	= New UsersRepo;
		$this->performerRepo = New PerformerRepo;
	}

	public function getInicio(){		
		
		return view('Admin/inicio');	
		
	}

	public function getRequests(){

		$pqr = $this->PqrRepo->getApplications();
		$id_user = $pqr[0]->id_user;		
		$user = $this->usersRepo->findUserById($id_user);
		/*var_dump($user[0]->user_type);
		die();*/
		if($user[0]->user_type==1){			
			$users = $this->performerRepo->findPerformerById($id_user);
			$datos = array(
				'name' => $users[0]->perfor_name,
				'photo' => $users[0]->photo_identification,
				);			
		}elseif ($user[0]->user_type==3) {
			
		}

		return view('Admin/solicitudes',['pqrs' => $pqr, 'user' => $datos]);
	}
}