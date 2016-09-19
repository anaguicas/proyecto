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
        $performers->id_user    = $datos['id_user'];
        $studios->name          = $studio['studio_name'];
        $studios->description   = $studio['description'];
        $studios->responsible   = $studio['studio-owner'];        
        $studio->timestamps             = false;
        $studio->save();

        return true;
    }

    public function editProfile(){
        
    }


    public function removePerformer($id){
        $performer=DB::table('users')
            ->where('users.id', $id)
            ->update(['is_active'=> 0 ]);

        return $performer;
    }

	public function listPerformers(){
		$performers=DB::table('Performers')
            ->join('Performer_studio','Performers.id', '=', 'Performer_studio.id_performer')
            ->join('Studio', 'Studio.id', '=', 'Performer_studio.id_studio' )
            ->join('users', 'users.id', '=', 'Performers.id_user')
            ->where('users.is_active', 1)
            ->select('Performers.name as nombreperformer' ,
                'Performer_studio.id_studio',
                'Studio.name',
                'Performers.created_at',
                'Performers.id_user',
                'users.is_active')
            ->get ();

        //dump($performers); die;

        return ($performers);
    }

	public function AddPerformer(){

		
	}

	public function performerAuth($user){
		
	}
}