<html>
	<head>
		<title>Profesor</title>
		<link rel="stylesheet" type="text/css" href="css/estudiante.css" media="screen">
		<script type = 'text/javascript' src = 'js/util.js'></script>
		
	</head>
	<body>
		
		<div id = 'body' class = 'body'>
			<div id = 'header' class = 'header'>
				<h2 style="float:left">Estudiante</h2>
			</div>
			<div class = 'divlogout'>
				
				<a href="#" style="text-decoration:none; " onclick="logout()"><div id="logout">LogOut</div></a>
			
			</div>
		
			<div id = 'menu' class = 'menu' align = 'left'>
					<div style = "width: 170px; background-color: #868686; height: 30px;"><label style = "font-size:20px; margin-left: 50px;"> Indice </label></div>
					<!-- Las materias se generara dinamicamente-->
					<div class = 'nota'> Cuatrimestre 1:  </div>
					<div class = 'nota'> Promedio General: </div>
			
			</div>
				
			<div id = 'cuerpo' class = 'cuerpo'>
				
				<div id = 'materiasTomadas' class = 'mattom'>
					<div  id = ' divTabla' style = "margin: 1px;">
						<table id = 'materias'>
							<tr>
								<th>Codigo</th>
								<th>Materia</th>
								<th>Credito</th>
								<th>Horario</th>
								<th>Deseleccionar</th>
							</tr>
						</table>
					</div>			
				</div>
				<div  id = ' divTabla' style = "margin: 1px; margin-top: 230px; margin-left: 155px;">
						<table id = 'materias'>
							<tr>
								<th>Codigo</th>
								<th>Materia</th>
								<th>Credito</th>
								<th>Horario</th>
								<th>Seleccionar</th>
							</tr>
						</table>
					</div>
			</div>
		</div>
	</body>
</html>