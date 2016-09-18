<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDelete;

class Credit_card extends Model{
	protected $table ='credit_card';

	public function User(){
		return $this->belongsTo('App\Entities\Users','id_user','id');
	}
}