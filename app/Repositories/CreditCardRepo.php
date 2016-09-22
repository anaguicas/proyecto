<?php
namespace App\Repositories;

use App\Entities\Credit_card;
use Illuminate\Support\Facades\DB;

class CreditCardRepo extends BaseRepo{

	public function getModel(){
		return new Credit_card;
	}

	public function addCreditCard($datos){
		$card = new Credit_card;

		$card->number 			= $datos['number'];
		$card->bank				= $datos['bank'];
		$card->id_user			= $datos['id_user'];
		$card->timestamps = false;
		$card->save();

		return true;
		/*return cards::create([
            'name' => $data['cardname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/
	}

	public function update($id, $card){
		$number				= $card['number'];
        $bank				= $card['bank'];        
	    $this->model->where('id_user','=',$id)->update(['number' => $number,'bank' => $bank]);
	}

}