<?php

namespace App\Repositories;

use App\Entities\Performers;
use App\Entities\Studio;


class PerformersRepo extends BaseRepo{


	public function listPerformers(){
		return $this->model->all();
	}

	public function AddPerformer(){
		
	}

	public function performerAuth($user){
		
	}
}