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
use App\Repositories\StudioRepo;

use Session;
use Redirect;

class AdminController extends Controller{

	public function __construct(){
		$this->PqrRepo 	= New PqrRepo();
		$this->usersRepo 	= New UsersRepo;
		$this->performerRepo = New PerformerRepo;
		$this->studioRepo 	= New StudioRepo;
	}

	public function getInicio(){		
		
		return view('Admin/inicio');	
		
	}

	public function getRequestsHistory(){

		$pqr = $this->PqrRepo->getApplicationsHistory();				
/*
		var_dump($pqr);
		die();*/
		return view('Admin/RequestsHistory',['pqrs' => $pqr]);
	}

	public function getRequest($id){

	}

	public function getRequests(){
		$pqr = $this->PqrRepo->getRequests();

		return view('Admin/ListRequests',['pqrs'=> $pqr]);
	}

	public function rejectRequest($id){

	}

	public function approveRequest($id){
		
	}

	public function getlists(){		
		$studios = $this->studioRepo->listStudios();
		$performers = $this->performerRepo->listAdminPerformers();
		return View('Admin/List',['studios' => $studios,'performers'=>$performers]);
	}

	public function listStudios(){
		$studios = $this->studioRepo->getStudio();
	}

	public function listPerformers(){

	}

	public function listPerformersStudio($id){

	}
}