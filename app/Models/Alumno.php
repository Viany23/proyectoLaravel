<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
	
	protected $table = "alumnos";
	
	protected $fillable = ['nombre', 'apellido', 'edad', 'grupo'];
	protected $hidden = ['id'];
	
	public function obtenerAlumnos()
	{
		return Alumno::orderBy('edad', 'DESC')->get();
	}
	
	public function obtenerAlumnoPorId($id)
	{
		return Alumno::find($id);
	}

}
