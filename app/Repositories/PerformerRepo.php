<?php
namespace App\Repositories;

use App\Entities\Performers;
use Illuminate\Support\Facades\DB;


class PerformerRepo extends BaseRepo{

	public function getModel(){
		return new Performers;
	}

	public function addPerformer($datos){
		$performers = new Performers;
		
		$performers->id_user 				= $datos['id_user'];
		$performers->perfor_name			= $datos['name'];
		$performers->last_name 				= $datos['last_name'];
		$performers->identification 		= $datos['identification'];
		$performers->photo_identification 	= $datos['photo_identification'];
		$performers->city 					= $datos['city'];
		$performers->country 				= $datos['country'];
		$performers->birthdate				= $datos['birthdate'];
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

	public function editProfile($user){
        $performer = DB::table('Performers')
            ->join('users','Performers.id_user','=','users.id')
            ->select('users.email','users.password','users.name','Performers.perfor_name','Performers.last_name','Performers.identification','Performers.photo_identification','Performers.country','Performers.city')
            ->where('Performers.perfor_name','=',$user)
            ->get();

        return $performer;
    }
}