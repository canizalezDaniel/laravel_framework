<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Info;
use App\Servicios;
use App\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\MensajeRequest;
use App\Http\Requests\ServiciosRequest;
use App\Http\Requests\ContactoRequest;
use Input;
use Validator;
use Redirect;
use Session;
use Illuminate\Database\Eloquent\Model;


class BackendController extends Controller {

	//
/*CRUD Servicios*/
	public function servicios()
	{
		$servicios=Servicios::all();
		return view('backend.servicios',compact('servicios'));
	}


	public function editarServicios($id)
	{
		$servicio=Servicios::findOrFail($id);
		return view ('backend.editarServicios', compact('servicio'));
	}

	public function updateServicios($id, ServiciosRequest $request)
	{
		$servicio=Servicios::findOrFail($id);

		$servicio->update($request->all());

		// si valida y todo bien redirecciona a la vista articulos donde muestr=a todo los articulos creados.
		return redirect ('admin-pg/backend-sr');
	}

/*Fin Servicios*/


	public function mensaje()
	{
		$infos= Info::all();

		
		return view('backend.mensaje', compact('infos'));
	}

	public function editarMensaje($id)
	{

		$infos=Info::findOrFail($id);
		return view ('backend.editarMensaje', compact('infos'));
	}


	public function updateMensaje($id, MensajeRequest $request)
	{
		$info=Info::findOrFail($id);
		//$info->update($request->all());

		// si valida y todo bien redirecciona a la vista articulos donde muestr=a todo los articulos creados.
		/*UPLOAD FILES*/
		 $file = array('foto' => Input::file('foto'));
		 //$original_filename = Input::file('foto')->getClientOriginalName();
		  // setting up rules

		  $rules = array('foto' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'); //mimes:jpeg,bmp,png and for max size max:10000
		  // doing the validation, passing post data, rules and the messages
		  $validator = Validator::make($file, $rules);
		  

		  if ($validator->fails()) {
		    // send back to the page with the input data and errors
		   // return Redirect::to('mensajes/{id}/editarMensaje')->withInput()->withErrors($validator);
		  		return redirect ('mensajes/'.$id.'/editarMensaje')->withInput()->withErrors($validator);
		  }
		  

		  else {
		    // checking file is valid.
		    if (Input::file('foto')->isValid()) 
		    {
		      $destinationPath = 'img'; // upload path
		      $extension = Input::file('foto')->getClientOriginalExtension(); // getting image extension
		      
		      $fileName =  Input::file('foto')->getClientOriginalName(); // renameing image
		      
		       Input::file('foto')->move($destinationPath, $fileName); // uploading file to given path
		       $request->file('foto')->getClientOriginalName();
		     	$data['foto']=$request->file('foto')->getClientOriginalName();
		      	$info->update($data);

		      //return Redirect::to('admin-pg/backend-ms', compact('infos'));
		      	return redirect ('admin-pg/backend-ms');
		    }
		    
		    else {
		      // sending back with error message.
		      Session::flash('error', 'uploaded file is not valid');
		      //return Redirect::to('admin-pg/backend-ms');
		      	return redirect ('admin-pg/backend-ms');
		    }
		  }

		/*FIN UPLOAD FILES*/

		//return redirect ('admin-pg/backend-ms');
	}


	public function contacto()
	{
		$contacto=Contacto::all();
		return view('backend.contacto',compact('contacto'));
	}

	public function editarContacto($id)
	{
		$contacto= Contacto::findOrFail($id);
		return view ('backend.editarContacto', compact('contacto'));
	}

	public function updateContacto($id, ContactoRequest $request)
	{
		$contacto=Contacto::findOrFail($id);
		$contacto->update($request->all());

		return redirect('admin-pg/backend-ct');
	}

}
