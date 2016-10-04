<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Foundation\Auth\User;

class Admin extends Model{
	protected $table ='Admin';

	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','Admin_id_user_fkey','id');
	}

	public function Solicitudes(){
		return $this->belonsTo('App\Entities\Users','pqr_user_fk','id');
	}
}