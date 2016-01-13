<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipos extends Model {

	/**
	 * La tabla de la base de datos usada por el modelo
	 * @var string
	 */
	protected $talbe = 'tipos';

	/**
	 * Los atributos que se pueden asignar
	 * @var array
	 */
	protected $fillable = ['tipo'];

}
