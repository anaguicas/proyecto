<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;

class PQR extends Model{
	protected $table = "pqr";

	public function Usuarios(){
		return $this->belongsTo('App\Entities\Users','pqr_user_fk','id');
	}

	public function pqrType(){
		return $this->belongsTo('App\Entities\PQRType','pqr_type_fk','id');
	}
}