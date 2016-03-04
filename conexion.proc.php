<?php
	error_reporting(0);
	$con = mysqli_connect("mysql.hostinger.es", "u200607218_65", "admin123", "u200607218_65");

	//si no se puede realizar la conexión, mostramos error
	if (!$con) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}
?>