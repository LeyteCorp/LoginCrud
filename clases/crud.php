<?php 

	class crud{
		public function agregar($datos){
			$obj= new Conexion();
			$conexion=$obj->conectar();

			$sql="INSERT into t_dinner (conceptog,cantidadg,fecha)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($iddiner){
			$obj= new Conexion();
			$conexion=$obj->conectar();

			$sql="SELECT id_diner,
							conceptog,
							cantidadg,
							fecha
					from t_dinner 
					where id_diner='$iddiner'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_diner' => $ver[0],
				'conceptog' => $ver[1],
				'cantidadg' => $ver[2],
				'fecha' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new Conexion();
			$conexion=$obj->conectar();

			$sql="UPDATE t_dinner set conceptog='$datos[0]',
										cantidadg='$datos[1]',
										fecha='$datos[2]'
						where id_diner='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($iddiner){
			$obj= new Conexion();
			$conexion=$obj->conectar();

			$sql="DELETE from t_dinner where id_diner='$iddiner'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>