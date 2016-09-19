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

	public function editProfile($user){
        $subscriber = DB::table('Subscriber')
            ->join('users','Subscriber.id_user','=','users.id')
            ->select('users.email','users.password','Subscriber.subs_name','Subscriber.last_name','Subscriber.identification','Subscriber.country')
            ->where('Subscriber.subs_name','=',$user)
            ->get();

        return $subscriber;
    }
}