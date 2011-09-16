<?php
	include("conector/motor.php");
	class usuarios
	{
		var $autorizado = false;
		
		function __construct($usuario,$pass)
		{	
			$query = "SELECT * FROM usuario";
			$result = mysql_query($query);
			$row = mysql_fetch_assoc($result);
			
			if($usuario == $row["usuario"]  && $pass == $row["pass"])
			{
				$this->autorizado = true;
			}
		}
	}
?>