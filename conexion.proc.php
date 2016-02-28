<?php
	error_reporting(0);
	$con = mysqli_connect("localhost", "root", "", "bbdd_mesde65");

	//si no se puede realizar la conexión, mostramos error
	if (!$con) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}
?>