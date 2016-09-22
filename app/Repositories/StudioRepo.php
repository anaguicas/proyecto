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
        $studios->id_user       = $studio['id_user'];
        $studios->studio_name   = $studio['studio_name'];
        $studios->description   = $studio['description'];
        $studios->responsible   = $studio['studio_owner'];        
        $studios->timestamps    = false;
        $studios->save();
        return true;
    }

    public function editProfile($user)
    {
        $studio = DB::table('Studio')
            ->join('users', 'Studio.id_user', '=', 'users.id')
            ->join('credit_card', 'credit_card.id_user', '=', 'users.id')
            ->select(
                'users.email', 'users.password', 
                'users.name', 'Studio.studio_name', 
                'Studio.description', 'Studio.responsible', 
                'credit_card.number', 'credit_card.bank','Studio.id')
            ->where('Studio.studio_name', '=', $user)
            ->get();

        return $studio;
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
            ->select(
                'Performers.perfor_name AS nombreperformer',
                'Performer_studio.id_studio',
                'Performers.created_at',
                'Performers.id_user',
                'Studio.studio_name',
                'users.is_active')
            ->get ();
        //dump($performers); die;

        return ($performers);
    }

    public function updateStudio($user,$id){
        $studio->update($user);
    }

	public function AddPerformer(){

	}

	public function performerAuth($user){
		
	}

	public function update($id,$datos){
	    $studio_name = $datos['studio_name'];
        $responsible = $datos['reponsible'];
        $description = $datos['description'];

        $this->model->where('id_user','=',$id)->update(['studio_name' => $studio_name, 'responsible' => $responsible, 'description' => $description]);
        //$this->model->update(['studio_name'=>$studio_name,'responsible'=>$responsible,'description'=>$description])->where('id_user','=',$id);
    }
}