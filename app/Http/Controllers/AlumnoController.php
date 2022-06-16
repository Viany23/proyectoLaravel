<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
	protected $alumnos;
	public function __construct(Alumno $alumnos)
	{
		$this->alumnos = $alumnos;
	}

    public function index()
	{
		$alumnos = $this->alumnos->obtenerAlumnos();
		return view('alumnos.lista', ['alumnos' => $alumnos]);
	}

    public function create()
	{
		return view('alumnos.crear');
	}

   public function store(Request $request)
	{
	
		$alumno = new Alumno($request->all());
		
		$alumno->save();
		return redirect()->action([AlumnoController::class, 'index']);
	}

	public function show($id)
	{
		$alumno = $this->alumnos->obtenerAlumnoPorId($id);
		return view('alumnos.ver', ['alumno' => $alumno]);
	}

    public function edit($id)
	{
		
		$alumno = $this->alumnos->obtenerAlumnoPorId($id);
		return view('alumnos.editar', ['alumno' => $alumno]);
	}

    public function update(Request $request, $id)
	{
		$alumno = Alumno::find($id);
		$alumno->fill($request->all());
		$alumno->save();
		return redirect()->action([AlumnoController::class, 'index']);
	}

    public function destroy($id)
	{
		$alumno = Alumno::find($id);
		$alumno->delete();
		return redirect()->action([AlumnoController::class, 'index']);
	}
}
