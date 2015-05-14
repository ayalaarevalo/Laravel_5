<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model {

	//
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public $timestamps= true;
	protected $fillable= [
		'tipo_documento_id',
		'departamento_id',
		'numeracion',
		'fecha_documento',
		'asunto',
		'archivo'
	];


	protected $table = 'documentos';

	protected $guarded = ['id'];


	public function user()
	{

		return $this->belongsTo('App\User');

	}
	
	public function departamento()
	{

		return $this->belongsTo('App\Departamento');

	}	


	public function tipo_documento()
	{

		return $this->belongsTo('App\TipoDocumento');

	}

	public function scopeAsunto($query, $asunto)
	{	
		if($asunto != "")
		{

			$query->where('asunto', 'like' , '%' . $asunto . '%');

		}

	}

}
