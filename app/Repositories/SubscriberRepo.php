<?php

namespace App\Repositories;

use App\Entities\Subscriber;


class SubscriberRepo extends BaseRepo{

	public function getModel(){
		return new Subscriber;
	}

	public function listSubscriber(){
		return $this->model->all();
	}

	public function getCrear(){
		$performerModel = new Subscriber;		
	}

	public function postGuardar(){
		
	}
	
	public function subscriberAuth($user){
		
	}
}