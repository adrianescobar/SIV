<html>

	<head>
		<title>Pagina login</title>
		<script type="text/javascript" src="js/util.js"></script>
		<link rel="stylesheet" type="text/css" href="css/login.css" media="screen">
		
	</head>

<body>
	<div id = 'body' class = 'body'>
	
		<div id = 'header' class = 'header'>
			<h2>Login</h2>
		</div>
		
		<div id = 'login' align = 'center'>
			<div id = 'ldentro'>
				<form method = 'post'>
					
					<div class = 'input'><label>Usuario: </label><input type ='text' name = 'usuario' id = 'usuario'></div>
					<div class = 'input'><label>Password: </label><input type ='password' name = 'pass' id = 'pass'></div>
					<div id = 'entrar' align='center'><a href = '#' onclick="login('usuario','pass')"><div class = 'button'>Entrar</div></a></div>
					
				</form>
				
				<div id="msg">
				
					
				
				</div>
				
			</div>	
		</div>
	</div>
	

</body>
</html>