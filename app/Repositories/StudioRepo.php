<?php

namespace App\Repositories;

//use App\Entities\Performers;
use App\Entities\Studio;


class StudioRepo extends BaseRepo{

	public function getModel(){
		return new Studio;
	}

	public function AddStudio($studio){
		$studios = new Studio;
		$studios->name = $studio['studio_name'];
		$studios->description = $studio['description'];		
		$studios->email = $studio['email'];
		$studios->password = $studio['password'];
		$studios->owner = $studio['studio-owner'];
		$studios->password = $studio['password'];
	}

	public function listPerformers(){
		return $this->model->all();
	}

	public function AddPerformer(){
		
	}

	public function performerAuth($user){
		
	}
}