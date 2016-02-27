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
			$sql = "INSERT INTO donacion (cantidad, id_usuario) VALUES ('$_REQUEST[cantidad]', $user_id)";
			$sql=utf8_decode($sql);
			echo $sql;
			// }

			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Donación realizada';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>