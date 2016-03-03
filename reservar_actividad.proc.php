<?php
	include_once 'conexion.proc.php';
	session_start();
	$creador = $_REQUEST['creador'];
	$actividad = $_REQUEST['actividad'];
	$usuario = $_SESSION['id'];

	$sql_actividad = "UPDATE actividad SET estado = 2 WHERE id = $actividad";
	mysqli_query($con, $sql_actividad);

	$sql_trueque = "INSERT INTO trueque (id_creador, id_usuario_realiza, id_actividad) VALUES ($creador, $usuario, $actividad)";
	mysqli_query($con, $sql_trueque);

	mysqli_close($con);

	header("location: ver_mas.php?actividad=".$actividad);
?>