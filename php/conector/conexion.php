<?php

	
	$oCon = new conexion($config['servidor'],$config['usuario'],$config['clave'],$config['basedatos']);
	
	class conexion
	{
		var $enlace;
		
		function __construct($servidor,$usuario,$clave,$basedatos)
		{
			$this->enlace = mysql_connect($servidor, $usuario, $clave);
			mysql_select_db($basedatos, $this->enlace);	
		}
		function __destruct()
		{
			mysql_close($this->enlace);
		}
	}
?>
