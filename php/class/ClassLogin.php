<?php

	
	class Sistema_login{
	
		public $usuario = null;
	
		public function Sistema_login($usuario,$password){
		
			$query = "select usuario,privilegio from usuarios_estudiantes where usuario = '$usuario' and pass = '$password' union select usuario,privilegio from usuarios_profesor  where usuario = '$usuario' and pass = '$password'";
			
			$resultado = mysql_num_rows(mysql_query($query));
			
			if($resultado == 1){
			
				$this->usuario = mysql_fetch_array(mysql_query($query));
			
			}
		
		}
		
		public function respuesta(){
		
			if($this->usuario != null){
			
				echo "resultado = { 
							
							usuario : " . $this->usuario["usuario"].",
							
							privilegio : ".$this->usuario["privilegio"]."
							
							}";
			}else{
			
				echo "Fail";
			
			}
			
		
		}	
	
	}
?>