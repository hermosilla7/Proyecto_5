<?php
	session_start();
	error_reporting(0);
	include_once 'conexion.proc.php';

	$nomUsuari = $_SESSION['nombre'];
	$user_id = $_SESSION['id'];
	$usuario_id = $_REQUEST['id'];

	// imagen nueva
	$foto_new=$_FILES["foto"]["name"];
			$ruta_new=$_FILES["foto"]["tmp_name"];
			$destino_new="img/".$foto_new;
			copy($ruta_new, $destino_new);
			echo $foto_new;
			echo $ruta_new;
			echo $destino_new;
	// 

	if ($foto_new != "" && '$_REQUEST[pass]' != "") {
		echo "entra 1";
		$sql = "UPDATE usuario SET nombre='$_REQUEST[nombre]', pass=md5('$_REQUEST[pass]'), apellidos='$_REQUEST[apellidos]', correo='$_REQUEST[correo]', img='$foto_new', nivel=$_REQUEST[nivel] WHERE id = $usuario_id";
	}
	else if ($foto_new == "" && '$_REQUEST[pass]' != "") {
		echo "entra 2";
		$sql = "UPDATE usuario SET nombre='$_REQUEST[nombre]', pass=md5('$_REQUEST[pass]'), apellidos='$_REQUEST[apellidos]', correo='$_REQUEST[correo]', nivel=$_REQUEST[nivel] WHERE id = $usuario_id";
	}
	else if ($foto_new != "" && '$_REQUEST[pass]' == "") {
		echo "entra 3";
		$sql = "UPDATE usuario SET nombre='$_REQUEST[nombre]', apellidos='$_REQUEST[apellidos]', correo='$_REQUEST[correo]', img='$foto_new', nivel=$_REQUEST[nivel] WHERE id = $usuario_id";
	}
	else{
		echo "entra 4";
		$sql = "UPDATE usuario SET nombre='$_REQUEST[nombre]', apellidos='$_REQUEST[apellidos]', correo='$_REQUEST[correo]', nivel=$_REQUEST[nivel] WHERE id = $usuario_id";
		
	}

	//lanzamos la sentencia sql
	$datos = mysqli_query($con, $sql);
	header("location: usuarios.php")
?>

<?php  
	include 'footer.php';
?>