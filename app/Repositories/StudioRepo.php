<?php

namespace App\Repositories;

use App\Entities\Studio;
use Illuminate\Support\Facades\DB;


class StudioRepo extends BaseRepo{

	public function getModel(){
		return new Studio;
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