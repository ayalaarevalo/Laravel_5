<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDocumento extends Model {

	//
	 
	use SoftDeletes;

	protected $dates = ['deleted_at'];


	public $timestamps= true;
	protected $fillable= [
		'descripcion',
		'observacion'
	];


	protected $table = 'tipo_documentos';

	protected $guarded = ['id'];


	public function documento()
	{

		return $this->hasMany('App\Documento');

	}

}
