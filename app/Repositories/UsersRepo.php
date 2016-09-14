<?php
namespace App\Repositories;

use App\Entities\Users;

class UsersRepo extends BaseRepo{

	public function getModel(){
		return new Users;
	}

	public function addUser($datos){
		$user = new Users;
		
		$user->name 				= $datos['username'];
		$user->email				= $datos['email'];
		$user->password				= bcrypt($datos['password']);
		$user->is_active			= false;
		$user->user_type 			= 1;
		$user->save();

		return true;
		/*return Users::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/
	}

	public function findUser($user){
		return $this->model->where('email','=',$user)->first();
	}

}