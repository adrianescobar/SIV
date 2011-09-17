<?php

	class SistemaCreacionSession{
	
		public $privilegio = null;
	
		function SistemaCreacionSession($usuario,$rango){
		
			$_SESSION["usuario"] = $usuario ;
			$_SESSION["privilegio"] = $rango;
		
			$this->privilegio = $rango;
			
		}
		
		public function redirecion(){
		
			switch($this->privilegio){
			
				case 4:
					//header("Location : estudiantes.php");
					header("Location: ../estudiantes.php");
				
				break;
				
				case 3:
				
					header("Location: ../profesor.php");
				
				break;
			
			}
		
		}
	
	}

?>