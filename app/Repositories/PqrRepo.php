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
            ->select('pqr.*','Performers.photo_identification','Performers.perfor_name')
            ->orderBy('pqr.fecha_solicitud','desc')
            ->get();
		return $pqr;
		/*return $this->model->all();*/
	}	

	public function getRequests(){
		$pqr = DB::table('pqr')
			->join('users','pqr.id_user','=','users.id')    
            ->join('Performers','Performers.id_user','=','users.id')       
            ->select('pqr.*','Performers.photo_identification','Performers.perfor_name')
            ->where('pqr.estado','!=','Espera')
            ->orderBy('pqr.fecha_solicitud','desc')
            ->get();
		return $pqr;
	}
}