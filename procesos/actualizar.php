<?php 
	require_once "../clases/Conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['conceptogU'],
		$_POST['cantidadgU'],
		$_POST['fechaU'],
		$_POST['iddiner']
				);

	echo $obj->actualizar($datos);
	

 ?>