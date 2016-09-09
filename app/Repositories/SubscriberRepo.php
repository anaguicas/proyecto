<?php

use App\Entities\Performers;


class PerformersRepo extends BaseRepo{

	public function getModel(){
		return new Subscriber;
	}

	public function listSubscriber(){
		return $this->model->all();
	}

	public function getCrear(){
		$performerModel = new Subscriber;
		$performerModel->
	}

	public function postGuardar(){
		
	}
	
	public function subscriberAuth($user){
		
	}
}