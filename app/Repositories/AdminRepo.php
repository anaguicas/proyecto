<?php
namespace App\Repositories;

use App\Entities\Admin;
use Illuminate\Support\Facades\DB;

Class AdminRepo extends BaseRepo{

	public function getModel(){
		return new Performers;
	}

	public function Applications(){
		
	}
}