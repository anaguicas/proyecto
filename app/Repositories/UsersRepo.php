<?php
namespace App\Repositories;

use App\Entities\Users;
use Illuminate\Support\Facades\DB;

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
		
		$user = $this->model->select('id')->where('email','=',$user)->get();
		//$user = DB::table('users')->select('id')->whereIn('email',$user)->get();
		
        return $user;
	}

}