<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;

class PQRType extends Model{
	protected $table = "PQR";

	public function PQR(){
		return $this->hasMany('App\Entities\PQR','pqr_type','id');
	}
}