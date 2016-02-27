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
			$destino="img/".$foto;
			copy($ruta, $destino);
			echo $foto;
			echo $ruta;
			echo $destino;
			//
			// if ($foto != "") {
			$sql = "INSERT INTO actividad (nombre, descripcion, fecha, img, ubicacion_lat, ubicacion_lon, id_tipo_actividad, compensacion, direccion, peticion, id_usuario) VALUES ('$_REQUEST[nombre]', '$_REQUEST[descripcion]', '$_REQUEST[fecha]', '$foto', '$_REQUEST[ubicacion_lat]', '$_REQUEST[ubicacion_lon]', '$_REQUEST[id_tipo_actividad]', '$_REQUEST[compensacion]', '$_REQUEST[direccion]', '$_REQUEST[peticion]', $user_id)";
			$sql=utf8_decode($sql);
			echo $sql;
			// }

			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Actividad dada de alta';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
