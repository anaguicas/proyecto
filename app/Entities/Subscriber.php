<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Foundation\Auth\User;

class Subscriber extends Model{
	protected $table ='Subscriber';

	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','id_user','id');
	}
	
}