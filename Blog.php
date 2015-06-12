<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	//

	protected $fillable=[
        'titulo',
        'autor',
        'contenido',
        'fechaPublicado',
        'imagen',
        'publicado'
    ];

}
