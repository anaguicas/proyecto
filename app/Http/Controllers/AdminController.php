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
		return view('Admin/Moreinfo');
	}

	public function getRequests(){
		$pqr = $this->PqrRepo->getRequests();

		return view('Admin/ListRequests',['pqrs'=> $pqr]);
	}

	public function rejectRequest($id){
		$pqrs = $this->PqrRepo->getRequests();
		$this->PqrRepo->rejectRequest($id);
		return Redirect::route('admin.requests');
	}

	public function getApproveRequest($id){
		/*$pqrs = $this->PqrRepo->getRequests();
		$this->PqrRepo->approveRequest($id);
		return Redirect::route('admin.requests');*/
		$pqrs = $this->PqrRepo->getRequests();
		/*var_dump($pqrs);
		die();*/
		$pqr =  array(
            'request_date'  => $pqrs[0]->fecha_solicitud,
            'status'      	=> $pqrs[0]->estado,
            'type'    		=> $pqrs[0]->type,
            'description' 	=> $pqrs[0]->descripcion
            );
		return View('Admin/ApproveRequest',compact('pqr','id'));
	}

	public function putApproveRequest($id){
		$pqrs = $this->PqrRepo->getRequests();
		$this->PqrRepo->approveRequest($id);

		$validation = validator::make(\Input::all(),[
			'answer'	=> 'required'
			]);

		if($validation->passes()){
			
			$answer	= \Input::get('answer');

			if($this->PqrRepo->getAnswer($id,$datos_pqr)){
				return Redirect::route('admin.requests');
			}else{
				return redirect()->back()->with('message','All changes saved');
			}
		}else{
			return redirect()->back()->withInput()->withErrors($validation->errors());
		}

		return Redirect::route('admin.requests');
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