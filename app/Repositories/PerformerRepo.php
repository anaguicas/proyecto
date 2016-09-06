<?php

use App\Entities\Performers;


class PerformersRepo extends BaseRepo{


	public function listPerformers(){
		return $this->model->all();
	}

	public function AddPerformer(){
		
	}

	public function performerAuth($user){
		
	}
}