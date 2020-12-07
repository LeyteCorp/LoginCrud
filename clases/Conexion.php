
<?php 

	class Conexion{
		public function conectar(){
			$conexion = mysqli_connect('localhost', 
										'root', 
										'', 
										'crudlogin');
			return $conexion;
		}
	}
 ?>