<?php
	include_once 'conexion.proc.php';
	session_start();
	$user_id = $_SESSION['id'];
	error_reporting(0);
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
		<?php
			//imagen avatar
			$foto=$_FILES["foto"]["name"];
			$ruta=$_FILES["foto"]["tmp_name"];
			$destino="img/avatar/".$foto;
			copy($ruta, $destino);

			//Capitalizar datos
			$nombre = ucfirst(strtolower($_REQUEST['nombre']));
			$descripcion= ucfirst(strtolower($_REQUEST['descripcion']));
			// if ($foto != "") {
			$sql = "INSERT INTO actividad (nombre, descripcion, fecha, img, ubicacion_lat, ubicacion_lon, id_tipo_actividad, direccion, peticion, id_usuario) VALUES ('$nombre', '$descripcion', '$_REQUEST[fecha]', '$foto', '$_REQUEST[ubicacion_lat]', '$_REQUEST[ubicacion_lon]', '$_REQUEST[id_tipo_actividad]', '$_REQUEST[direccion]', '$_REQUEST[peticion]', '$user_id')";
			$sql=utf8_decode($sql);
			// }

			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Actividad dada de alta';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        window.location.replace(\"actividades.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
