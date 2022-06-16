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
		input[type=text], select {
		   width: 100%;
		   padding: 12px 20px;
		   margin: 8px 0;
		   display: inline-block;
		   border: 1px solid #ccc;
		   border-radius: 4px;
		   box-sizing: border-box;
		}
		input[type=submit] {
		   width: 100%;
		   background-color: #4CAF50;
		   color: white;
		   padding: 14px 20px;
		   margin: 8px 0;
		   border: none;
		   border-radius: 4px;
		   cursor: pointer;
		}
		input[type=submit]:hover {
		   background-color: #45a049;
		}
		 div {
		   border-radius: 5px;
		   background-color: #f2f2f2;
		   padding: 20px;
		}
        </style>


    </head>
    <body class="antialiased">
	
		<a href="/alumnos">Ver listado de alumnos</a>
		
		<h2>Ver Alumno<h2>
		
		<div>
		   <p> Nombre: {{ $alumno->nombre}}</p>
		   <p> Apellido: {{ $alumno->apellido}}</p>
		   <p> Edad: {{ $alumno->edad}}</p>
		   <p> Dirección: {{ $alumno->grupo}}</p>
		</div>
		
        
    </body>
</html>
