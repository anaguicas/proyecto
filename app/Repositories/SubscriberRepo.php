<?php

namespace App\Repositories;

use App\Entities\Subscriber;


class SubscriberRepo extends BaseRepo{

	public $timestamps = false;

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

	public function addSubscriber($datos){
		$subscriber = new Subscriber;
		
		$subscriber->id_user 				= $datos['id_user'];
		$subscriber->name 					= $datos['name'];
		$subscriber->last_name 				= $datos['last_name'];
		$subscriber->identification 		= $datos['identification'];
		$subscriber->country 				= $datos['country'];		
		$subscriber->timestamps 			= false;
		$subscriber->save();

		return true;
	}
}