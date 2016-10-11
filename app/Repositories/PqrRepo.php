<?php
namespace App\Repositories;

use App\Entities\PQR;
use Illuminate\Support\Facades\DB;

class PqrRepo extends BaseRepo{

	public function getModel(){
		return new pqr;
	}

	public function getApplicationsHistory(){
		$pqr = DB::table('pqr')
            ->join('users','pqr.id_user','=','users.id')    
            ->join('Performers','Performers.id_user','=','users.id')  
            ->join('pqr_type','pqr_type.id','=','pqr.tipo')       
            ->select('pqr.*','Performers.photo_identification','Performers.perfor_name','pqr_type.type')
            ->orderBy('pqr.fecha_solicitud','desc')
            ->get();
		return $pqr;
		/*return $this->model->all();*/
	}	

	public function getRequests(){
		$pqr = DB::table('pqr')
			->join('users','pqr.id_user','=','users.id')    
            ->join('Performers','Performers.id_user','=','users.id')  
            ->join('pqr_type','pqr_type.id','=','pqr.tipo')     
            ->select('pqr.*','Performers.photo_identification','Performers.perfor_name','pqr_type.type')
            ->where('pqr.estado','=','Espera')
            ->orderBy('pqr.fecha_solicitud','desc')
            ->get();
		return $pqr;
	}

	public function approveRequest($id){
		$pqr = DB::table('pqr')
            ->where('pqr.id', $id)
            ->update(['estado'=> 'Approve' ]);

        return $pqr;
	}

	public function rejectRequest($id){
		$pqr = DB::table('pqr')
            ->where('pqr.id', $id)
            ->update(['estado'=> 'Reject' ]);

        return $pqr;
	}
}