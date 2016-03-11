<?php
	include_once 'conexion.proc.php';
	session_start();
	$creador = $_REQUEST['creador'];
	$actividad = $_REQUEST['actividad'];
	$usuario = $_SESSION['id'];

	$sql_actividad = "UPDATE actividad SET estado = 0 WHERE id = $actividad";
	mysqli_query($con, $sql_actividad);

	$sql_trueque = "DELETE FROM trueque WHERE id_creador = $creador AND id_usuario_realiza = $usuario AND id_actividad = $actividad";
	mysqli_query($con, $sql_trueque);

	mysqli_close($con);

	header("location: ver_mas.php?actividad=".$actividad);
?>