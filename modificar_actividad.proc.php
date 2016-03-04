   <?php
   	session_start();
   	error_reporting(0);
   	include_once 'conexion.proc.php';

   	$nomUsuari = $_SESSION['nombre'];
   	$user_id = $_SESSION['id'];

   	// imagen nueva
   	$foto_new=$_FILES["foto"]["name"];
   			$ruta_new=$_FILES["foto"]["tmp_name"];
   			$destino_new="img/avatar/".$foto_new;
   			copy($ruta_new, $destino_new);
   			echo $foto_new;
   			echo $ruta_new;
   			echo $destino_new;

   	if ($foto_new != "") {
   		$sql = "UPDATE actividad SET nombre=$_REQUEST[nombre], descripcion=$_REQUEST[descripcion], fecha=$_REQUEST[fecha], direccion=$_REQUEST[direccion], ubicacion_lat=$_REQUEST[ubicacion_lat], ubicacion_lon=$_REQUEST[ubicacion_lat], img=$destino_new";
   	}
   	else{
         $sql = "UPDATE actividad SET nombre=$_REQUEST[nombre], descripcion=$_REQUEST[descripcion], fecha=$_REQUEST[fecha], direccion=$_REQUEST[direccion], ubicacion_lat=$_REQUEST[ubicacion_lat], ubicacion_lon=$_REQUEST[ubicacion_lat]";

   	}

   	//lanzamos la sentencia sql
   	$datos = mysqli_query($con, $sql);

   	header("location: index.php")

   ?>

   <?php
   	include 'footer.php';
   ?>
