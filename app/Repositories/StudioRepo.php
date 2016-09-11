<?php

namespace App\Repositories;

//use App\Entities\Performers;
use App\Entities\Studio;


class StudioRepo extends BaseRepo{

	public function getModel(){
		return new Studio;
	}

	public function listPerformers(){
		return $this->model->all();
	}

	public function AddPerformer(){
		
	}

	public function performerAuth($user){
		
	}
}