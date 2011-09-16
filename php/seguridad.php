<?php
	include("confirmarusuario.php");
	
	if(isset($_SESSION["userLogin"]) && unserialize($_SESSION["userLogin"])->autorizado == true)
	{
	
	
	}
	else
	{
		header("Location:index.php");
	}
?>