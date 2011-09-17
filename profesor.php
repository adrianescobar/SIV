<!--<?php

	session_start();
	if($_SESSION["privilegio"]!=3){
	
		header("Location:index.php");
	
	}
	
?>-->
<html>
	<head>
		<title>Profesor</title>
		<link rel="stylesheet" type="text/css" href="css/profesor.css" media="screen">
		<script type = 'text/javascript' src = 'js/profesor.js'></script>
		<script type = 'text/javascript' src = 'js/util.js'></script>
		
	</head>
	<body>
	
		<div id = 'body' class = 'body'>
			<div id = 'header' class = 'header'>
				<h2 style="float:left">Profesor</h2>
				
					
				
			</div>
			<div id = 'cuerpo' class = 'cuerpo'>
				<a href="#" style="text-decoration:none;" onclick="logout()"><div id="logout">LogOut</div></a>
			
				<div id = 'menu' class = 'menu' align = 'left'>
					<div style = "width: 150px; background-color: #868686; height: 30px;"><label style = "font-size:20px; margin-left: 36px;"> Secciones </label></div>
					<!-- Las materias se generara dinamicamente-->
					<div id = 'menuboton' align='center'><a href = '#' onclick = 'prueba();'><div class = 'menubutton'>Materia</div></a></div>
					<div id = 'menuboton' align='center'><a href = '#' onclick = 'prueba();'><div class = 'menubutton'>Materia</div></a></div>
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
