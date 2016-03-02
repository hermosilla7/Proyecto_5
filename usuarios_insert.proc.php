<?php
	include 'header.php';
			
	//Imagen Avatar
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="img/avatar/".$foto;
	copy($ruta, $destino);

	$nombre = mb_strtolower($_REQUEST['nombre'],'UTF-8');
	$apellidos = mb_strtolower($_REQUEST['apellidos'],'UTF-8');
	$correo = mb_strtolower($_REQUEST['correo'],'UTF-8');

	$sql = "INSERT INTO usuario (nombre, apellidos, correo, pass, img, activo) VALUES ('$nombre', '$apellidos', '$correo', md5('$_REQUEST[pass]'), '$foto', $_REQUEST[activo]);";
	$sql=utf8_decode($sql);

	//lanzamos la sentencia sql
	mysqli_query($con, $sql);
?>
 <div class="titleact">
       <h1>Bienvenido</h1>
   </div>
  
   <?php
    echo "<div class='bienvenido'>";
    	echo ' <b>'.$nombre.'</b>, <br>tu usuario ha sido registrado correctamente. Ya puedes iniciar sesión en el siguiente formulario (o puedes hacerlo en el formulario de la esquina superior derecha). ¡Grácias!';
   		echo '<form id="f1" name="f1" action="login.proc.php" method="get">';
			echo '<div class="form-group">';
				echo '<input type="text" name="mail" class="form-control" placeholder="Correo" maxlength="50" value="'.$correo.'">';
			echo '</div>';
			echo '<div class="form-group">';
				echo '<input type="password" name="pass" class="form-control" placeholder="Contraseña"><i class="fa fa-lock"></i>';
			echo '</div>';
			echo '<div class="log-error">';
				if(isset($_SESSION['error'])){
					echo "ERROR: " . $_SESSION['error'];
					echo "<br/><br/>";
				}
			echo '</div>';
			echo '<button type="submit" class="log-btn" name="acce">Entrar</button>';
		echo '</form>';
    echo '</div>';


    include 'footer.php';
?>