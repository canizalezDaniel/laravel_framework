<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;
class BlogRequest extends Request {

	//
	public function authorize()
	{
			
		return true;
	}

	

	public function rules()
	{
			
		return [
			'titulo'=>'required',
			'autor'=>'required',
			'contenido'=>'required',
			'fechaPublicado'=>'required',
		

		];
	}

}
