<?php

	require_once("conector\motor.php");
	require_once("class\ClassLogin.php");
	
	$clase = new Sistema_login($_GET["usuario"],$_GET["password"]);
	
	$clase->redireccion();

?>