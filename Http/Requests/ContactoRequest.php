<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactoRequest extends Request {

	//

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nombre'=>'required',
			'telefono'=>'required',
			'email'=>'required|email'
			
		];
	}

}
