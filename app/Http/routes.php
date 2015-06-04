<?php



Route::get('/', 'PrincipalController@index');

Route::get('admin-pg', 'AdministradorController@index');


Route::get('admin-pg/backend-ms', 'BackendController@mensaje');
Route::get('mensajes/{id}/editarMensaje','BackendController@editarMensaje');
Route::put('updateMensajes/{id}','BackendController@updateMensaje');

Route::get('admin-pg/backend-sr', 'BackendController@servicios');
Route::get('servicios/{id}/editarServicios', 'BackendController@editarServicios');
Route::put('updateServicios/{id}','BackendController@updateServicios');

Route::get('admin-pg/backend-ct', 'BackendController@contacto');
Route::get('contacto/{id}/editarContacto', 'BackendController@editarContacto');
Route::put('updateContacto/{id}','BackendController@updateContacto');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('blog','BlogController');
Route::get('admin-pg/backend-bg', 'BlogController@administrar');