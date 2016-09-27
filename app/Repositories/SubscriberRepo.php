<?php

namespace App\Repositories;

use App\Entities\Subscriber;
use Illuminate\Support\Facades\DB;

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
		$subscriber->subs_name 				= $datos['name'];
		$subscriber->last_name 				= $datos['last_name'];
		$subscriber->identification 		= $datos['identification'];
		$subscriber->country 				= $datos['country'];		
		$subscriber->timestamps 			= false;
		$subscriber->save();

		return true;
	}

	public function editProfile($id){
        $subscriber = DB::table('Subscriber')
            ->join('users','Subscriber.id_user','=','users.id')
            ->select('users.email','users.password','users.name','Subscriber.subs_name','Subscriber.last_name','Subscriber.identification','Subscriber.country')
            ->where('users.id','=',$id)
            ->get();

        return $subscriber;
    }

    public function update($id,$datos){
    	$subs_name 		= $datos['subs_name'];
        $last_name 		= $datos['last_name'];
        $identification = $datos['identification'];
        $country		= $datos['country'];
        //$birthdate		= $datos['birthdate'];

        $this->model->where('id_user','=',$id)->update(['subs_name' 		=> $subs_name, 
        												'last_name' 		=> $last_name, 
        												'identification' 	=> $identification,
        												'country'			=> $country
        												//'birthdate'			=> $birthdate
        												]);
        //$this->model->update(['studio_name'=>$studio_name,'responsible'=>$responsible,'description'=>$description])->where('id_user','=',$id);

        return true;
    }
}