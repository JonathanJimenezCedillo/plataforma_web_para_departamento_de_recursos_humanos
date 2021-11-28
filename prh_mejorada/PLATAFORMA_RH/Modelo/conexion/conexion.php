<?php

	class Conectar{

	 public function conexion()
	 {
	 		try {
			    $conexionBDS = new PDO('mysql:host=localhost;dbname=recursoshumanos;charset=utf8', 'root', '');
			} catch (PDOException $e) {
			    print "¡Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
			return $conexionBDS;
	 }
	 public function cerrarConexion()
	 {
	 	$conexionBDS=null;
	 	$sql=null;
	 }



	}





?>
