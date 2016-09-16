<?php
namespace App\Repositories;

use App\Entities\Performers;


class PerformerRepo extends BaseRepo{

	public function getModel(){
		return new Performers;
	}

	public function addPerformer($datos){
		$performers = new Performers;
		
		$performers->id_user 				= $datos['id_user'];
		$performers->name 					= $datos['name'];
		$performers->last_name 				= $datos['last_name'];
		$performers->identification 		= $datos['identification'];
		//$performers->photo_identification 	= $datos['photo_identification'];
		$performers->city 					= $datos['city'];
		$performers->country 				= $datos['country'];
		//$performers->birthdate				= $datos['birthdate'];
		$performers->alias 					= $datos['username'];
		$performers->independent 			= true;	
		$performers->save();

		return true;	
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