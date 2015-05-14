<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model {

	//
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public $timestamps= true;
	protected $fillable= [
		'descripcion',
		'observacion'
	];


	protected $table = 'departamentos';

	protected $guarded = ['id'];

	public function scopeDescripcion($query, $descripcion)
	{	
		if($descripcion != "")
		{

			$query->where('descripcion', 'like' , '%' . $descripcion . '%')
				   ->where('observacion' , 'like' , '%' . $descripcion . '%');

		}

	}

	public function documento()
	{

		return $this->hasMany('App\Documento');

	}

}
