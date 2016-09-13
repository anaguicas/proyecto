<?php
namespace App\Repositories;

use App\Entities\Performers;


class PerformersRepo extends BaseRepo{

	public function getModel(){
		return new Performers;
	}

	public function addPerformer(){
		$performers = new Performers;
		
	}

	public function listPerformers(){
		return $this->model->all();
	}

	public function getCrear(){
		$performerModel = new Performers;
		
	}

	public function postGuardar(){
		
	}
	
	public function performerAuth($user){
		
	}
}