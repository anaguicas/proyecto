<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Foundation\Auth\User;


/**
*Clase Modelo de Eloquent para la entidad Performers
*/

class Performers extends Model{
	protected $table ='Performers';


	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','id_user_performer','id');
	}

	public function PerfilPerformer(){
		return $this->hasOne('App\Entities\Perfil_performer','id_performer_fk','id');
	}

	public function PhotoPerformer(){
		return $this->hasMany('App\Entities\Photo_performer','id_performer_FK','id');
	}
}
