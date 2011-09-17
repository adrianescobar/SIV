<?php
	
	session_start();
	require_once("class\sistemaCreacionSession.php");
	
	$class = new SistemaCreacionSession($_GET["usuario"],$_GET["privilegio"]);
	
	$class->redirecion();

?>