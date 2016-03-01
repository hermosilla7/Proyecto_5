<?php
	include_once 'conexion.proc.php';
	error_reporting(0);
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Insertar Usuario</title>
	</head>
	<body>
		<?php
			//imagen avatar
			$foto=$_FILES["foto"]["name"];
			$ruta=$_FILES["foto"]["tmp_name"];
			$destino="img/avatar/".$foto;
			copy($ruta, $destino);

			$nombre = mb_strtolower($_REQUEST['nombre'],'UTF-8');
			$apellidos = mb_strtolower($_REQUEST['apellidos'],'UTF-8');

			$sql = "INSERT INTO usuario (nombre, apellidos, correo, pass, img, activo) VALUES ('$nombre', '$apellidos', '$_REQUEST[correo]', md5('$_REQUEST[pass]'), '$foto', $_REQUEST[activo]);";
			$sql=utf8_decode($sql);

			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Usuario dado de alta';
			echo "<SCRIPT type='text/javascript'>
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
