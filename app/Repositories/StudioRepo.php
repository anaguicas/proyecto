<?php

namespace App\Repositories;

use App\Entities\Studio;
use Illuminate\Support\Facades\DB;


class StudioRepo extends BaseRepo{

	public function getModel(){
		return new Studio;
	}

    public function AddStudio($studio){
        $studios = new Studio;

        $studios->id_user       = $studio['id_user'];
        $studios->studio_name   = $studio['studio_name'];
        $studios->description   = $studio['description'];
        $studios->responsible   = $studio['studio_owner'];        
        $studios->timestamps    = false;
        $studios->save();

        return true;
    }

    public function editProfile($user){
        $studio = DB::table('Studio')
            ->join('users','Studio.id_user','=','users.id')
            ->join('credit_card','credit_card.id_user', '=','users.id')
            ->select('users.email','users.password','users.name','Studio.studio_name','Studio.description','Studio.responsible','credit_card.number', 'credit_card.bank')
            ->where('Studio.studio_name','=',$user)
            ->get();

        return $studio;
    }

	//Resta verificar la cantidad de Tokens del performer.
	public function listPerformers(){
		$performers=DB::table('Performers')
            ->join('Performer_studio','Performers.id', '=', 'Performer_studio.id_performer')
            ->join('Studio', 'Studio.id', '=', 'Performer_studio.id_studio' )
            ->select('Performers.name as nombreperformer' , 'Performer_studio.id_studio', 'Studio.name' )
            ->get ();
        return ($performers);
    }

	public function AddPerformer(){
		
	}

	public function performerAuth($user){
		
	}
}