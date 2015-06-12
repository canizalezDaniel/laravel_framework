<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Input;
use Validator;
use Redirect;
use Session;
use Illuminate\Database\Eloquent\Model;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$articulos=Blog::all();
        return view('blog.index',compact('articulos'));
	}

	public function administrar()
	{

		$articulos=Blog::all();
        return view('blog.administrar', compact('articulos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BlogRequest $request)
	{




		/*UPLOAD FILES*/
		 $file = array('imagen' => Input::file('imagen'));
		 //$request->file('imagen')->getClientOriginalName();
		 //$data['imagen']=$request->file('imagen')->getClientOriginalName();
		  $rules = array('imagen' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'); //mimes:jpeg,bmp,png and for max size max:10000
		  // doing the validation, passing post data, rules and the messages
		  $validator = Validator::make($file, $rules);

		  if ($validator->fails()) {
		    // send back to the page with the input data and errors
		
		  		return redirect ('blog/create')->withInput()->withErrors($validator);
		  }
		  else {
		    // checking file is valid.
		    if (Input::file('imagen')->isValid()) 
		    {
		      $destinationPath = 'img/articulos/'; // upload path
		      $extension = Input::file('imagen')->getClientOriginalExtension(); // getting image extension
		      $fileName =  Input::file('imagen')->getClientOriginalName(); // renameing image
		   		
		       // $imageName = $blog->id . '.' .$request->file('imagen')->getClientOriginalExtension();
		       Input::file('imagen')->move($destinationPath, $fileName); // uploading file to given path
		      	
				$blog = new Blog(array(
			     'imagen'=>Input::file('imagen')->getClientOriginalName(),
			      'titulo'=> $request->get('titulo'),
			       'autor'  => $request->get('autor'),
			         'contenido'  => $request->get('contenido'),
			         'fechaPublicado' => $request->get('fechaPublicado'),
			         'publicado'  => $request->get('publicado')

			     
			    ));


			    $blog->save();
		        return redirect ('admin-pg/backend-bg');
		    }
		    
		    else {
		      // sending back with error message.
		      Session::flash('error', 'uploaded file is not valid');
		      //return Redirect::to('admin-pg/backend-ms');
		      	return redirect ('admin-pg/backend-bg');
		    }
		  }

		 /*FIN UPLOAD FILES*/
  		
	 
	   
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		$articulo=Blog::find($id);
  		return view('blog.show',compact('articulo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
