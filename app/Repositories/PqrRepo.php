<?php
namespace App\Repositories;

use App\Entities\PQR;
use Illuminate\Support\Facades\DB;

class PqrRepo extends BaseRepo{

	public function getModel(){
		return new PQR;
	}

	public function getApplications(){
		return $this->model->all();
	}	
}