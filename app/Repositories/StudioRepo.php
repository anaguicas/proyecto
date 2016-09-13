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
        $studios->name = $studio['studio_name'];
        $studios->description = $studio['description'];
        $studios->email = $studio['email'];
        $studios->password = $studio['password'];
        $studios->owner = $studio['studio-owner'];
        $studios->password = $studio['password'];
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