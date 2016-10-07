<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;

/**
*Clase Modelo de Eloquent para la entidad Usuarios
*/

class Users extends Model{

	protected $table ='users';
	
	public function performers(){
		return $this->hasMany('App\Entities\Performers','Performers_id_user_fkey','id');
	}	

	public function Subscriber(){
		return $this->hasMany('App\Entities\Subscriber','Subscriber_id_user_fkey','id');	
	}

	public function Studio(){
		return $this->hasMany('App\Entities\Studio','Studio_id_user_fkey','id');	
	}

	public function Admin(){
		return $this->hasMany('App\Entities\Admin', 'Admin_id_user_fkey','id');
	}

	public function creditCard(){
		return $this->hasOne('App\Entities\Credit_card','credit_card_user','id');
	}

	public function Solicitudes(){
		return $this->hasMany('App\Entities\Admin','pqr_user_fk','id');
	}

	public function PQR(){
		return $this->hasMany('App\Entities\PQR','pqr_user_fk','id');
	}
}
