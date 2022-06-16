<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
		body {
		   margin: auto;
		   padding: 50px;
		}
		table, td, th {
		   border: 1px solid black;
		}
		table {
		   border-collapse: collapse;
		   width: 100%;
		}
		th {
		   height: 70px;
		}
		td {
		   height: 30px;
		}
		.button {
		   background-color: #4CAF50;
		   border: none;
		   color: white;
		   padding: 15px 32px;
		   text-align: center;
		   text-decoration: none;
		   display: inline-block;
		   font-size: 16px;
		}
        </style>


    </head>
    <body class="antialiased">
	
		<h2>Listado de Alumnos<h2>
		
		<table>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Grupo</th>
				<th>Acciones</th>			
			</tr>
		
		@foreach ($alumnos as $alumno)
			<tr>
				<td>{{ $alumno->nombre }}</td>
				<td>{{ $alumno->apellido }}</td>
				<td>{{ $alumno->edad }}</td>
				<td>{{ $alumno->grupo }}</td>
				<td>
					<a href="/alumnos/ver/{{$alumno->id}}">Ver</a>
					<a href="/alumnos/editar/{{$alumno->id}}">Editar</a>
					
					<a href="/alumnos/eliminar/{{$alumno->id}}" 
					onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar</a>
					
				</td>
			</tr>
		@endforeach
			
		</table>
		<br>
		<a href="/alumnos/crear">Nuevo Alumno</a>
       
    </body>
	<script> 
		function eliminarAlumno(value) {
			action = confirm(value) ? true : event.preventDefault()
		}
	</script>
</html>
