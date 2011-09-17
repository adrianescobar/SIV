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
		
		public function redireccion(){
		
			if($this->usuario != null){
			
				switch($this->usuario["privilegio"]){
				
					case 4:
						echo "resultado = { 
									
									usuario : " . $this->usuario["usuario"].",
									
									privilegio : ".$this->usuario["privilegio"]."
									
									}";
					break;
					
					case 3:
						echo "resultado = { 
									
									usuario : " . $this->usuario["usuario"].",
									
									privilegio : ".$this->usuario["privilegio"]."
									
									}";
					break;
					
				
				}
			
			}else{
			
				echo "Fail";
			
			}
			
		
		}	
	
	}
?>