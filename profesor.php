<html>
	<head>
		<title>Profesor</title>
		<link rel="stylesheet" type="text/css" href="css/profesor.css" media="screen">
		<script type = 'text/javascript' src = 'js/profesor.js'></script>
		
	</head>
	<body>
		<div id = 'body' class = 'body'>
			<div id = 'header' class = 'header'>
				<h2>Profesor</h2>
			</div>
			<div id = 'cuerpo' class = 'cuerpo'>
				<div id = 'menu' class = 'menu' align = 'left'>
					<label> Secciones </label>
					<div id = 'entrar' align='center'><a href = '#' onclick = 'prueba();'><div class = 'button'>Materia</div></a></div>
				</div>
				<div id = 'vista' class = 'vista' align = 'center'>
					<label class = 'letras'> Lista Estudiantes</label>
					<div  id = ' divTabla' style = "margin: 10px;">
						<table id = 'estudiantes'>
							<tr>
								<th>Matricula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Calificacion</th>
							</tr>
						</table>
					</div>
					<div id = 'entrar' align='center'><a href = '#'><div class = 'button'>Guardar</div></a></div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
