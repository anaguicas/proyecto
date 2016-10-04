<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;


/**
*Clase Modelo de Eloquent para la entidad Performers
*/

class Performers extends Model{
	protected $table ='Performers';


	public function Usuarios(){
		return $this->belongsTo('App\Entities\Users','Performers_id_user_fkey','id');
	}

	public function PerfilPerformer(){
		return $this->hasOne('App\Entities\Perfil_performer','id_performer_fk','id');
	}

	public function PhotoPerformer(){
		return $this->hasMany('App\Entities\Photo_performer','id_performer_FK','id');
	}
}
