<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*Route::get('departamentos/create', 'DepartamentosController@create');
Route::get('departamentos/{id}', 'DepartamentosController@show');
Route::post('departamentos', 'DepartamentosController@store');
Route::get('departamentos/edit/{id}', 'DepartamentosController@edit');*/

Route::resource('departamentos', 'DepartamentosController');
Route::resource('tipo_documentos', 'TipoDocumentosController');
Route::resource('documentos', 'DocumentosController');


/*App::singleton('LaCrud_Routes', function(){
    return [
        'departamentos' => 'DepartamentosController',
        'tipo_documentos' ,
        'documentos' => 'DocumentosController'
    ];
});

LaCrud::RegisterCrud(app('LaCrud_Routes'));
/*
Route::group(['middleware' => '\auth'],function(){

	App::singleton('LaCrud_Routes', function(){ 
		return [ 'departamentos' => 'DepartamentosController', 
			 'tipo_documentos' ,
			 'documentos' => 'DocumentosController' ]; 
	});

	LaCrud::RegisterCrud(app('LaCrud_Routes'));
});*/


Route::get('departamentos/delete/{id}', ['as' =>  'departamentos/delete', 'uses' => 'DepartamentosController@destroy']);
Route::get('departamentos/restore/{id}', ['as' =>  'departamentos/restore', 'uses' => 'DepartamentosController@restore']);

Route::get('tipo_documentos/delete/{id}', ['as' =>  'tipo_documentos/delete', 'uses' => 'TipoDocumentosController@destroy']);
Route::get('tipo_documentos/restore/{id}', ['as' =>  'tipo_documentos/restore', 'uses' => 'TipoDocumentosController@restore']);