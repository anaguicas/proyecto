<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Foundation\Auth\User;

class Studio extends Model{
	protected $table ='Studio';

	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','id_user_studio','id');
	}
}