<?php 
	require_once "../clases/Conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['conceptog'],
		$_POST['cantidadg'],
		$_POST['fecha']
				);

	echo $obj->agregar($datos);
	

 ?>