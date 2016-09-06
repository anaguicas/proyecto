<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Foundation\Auth\User;

class Admin extends Model{
	protected $table ='Admin';

	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','id_user_admin','id');
	}
}