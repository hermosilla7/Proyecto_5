<?php
	session_start();
	error_reporting(0);
	include("conexion.proc.php");

	$pass_encriptada=md5($_REQUEST['pass']);

	//preparamos la consulta que intenta encontrar el usuario Y la contraseña introducidos
	$sql = "SELECT * FROM usuario WHERE correo='$_REQUEST[mail]' AND pass='$pass_encriptada' AND activo = 1";
	//ejecutamos la consulta
	$resultado = mysqli_query($con,$sql);

	//si la consulta devuelve un registro, es que ha encontrado una coincidencia de usuario y contraseña, y por lo tanto, el usuario es correcto, hay que dejarlo pasar
	if(mysqli_num_rows($resultado)==1){
		//extraemos los datos de ese usuario para poder coger el nivel de acceso. no se hace en un bucle ya que, si no hay algún problema gordo, en la base de datos o hay un registro o no hay, no puede haber más de uno
		$datos_usuario=mysqli_fetch_array($resultado);

		//creamos la variable de sesión mail
		$_SESSION['id'] = $datos_usuario['id'];
		$_SESSION['mail'] = $_REQUEST['mail'];
		$_SESSION['nombre'] = $datos_usuario['nombre'];
		$_SESSION['apellidos'] = $datos_usuario['apellidos'];
		$_SESSION['telefono'] = $datos_usuario['telefono'];
		$_SESSION['nivel'] = $datos_usuario['nivel'];
		$_SESSION['img'] = $datos_usuario['img'];
		$_SESSION['monedas'] = $datos_usuario['monedas'];

		//redirigimos a la página principal
		header("location: index.php");
	} else {
		//como no se ha encontrado la pareja de usuario y contraseña, redirigimos a la página index.php con un mensaje de error
		$_SESSION['error']="Datos incorrectos";
		header("location: index.php");
	}

?>
