<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;

class Subscriber extends Model{
	protected $table ='Subscriber';

	public function Usuarios(){
		return $this->belonsTo('App\Entities\Users','id_user','id');
	}
	
}