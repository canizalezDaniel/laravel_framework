<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Contacto;
use App\Info;
use App\Servicios;
class PrincipalController extends Controller {

	//
	
	public function index()
	{
		/*Consultas a la base de dato*/
		$infos = Info::all();
		$servicios=Servicios::all();
		$contacto= Contacto::all();
		return view("principal.index", compact('infos', 'servicios', 'contacto'));
	}

	
	

	
}
