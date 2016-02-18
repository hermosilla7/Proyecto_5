<?php
	session_start();
	error_reporting(0);
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Jubilados</title>
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	</head>
	<body>	
		<div class="login-form">
			<div class="prin-img" align="middle" style="margin-bottom: 10px;">
		</div>
     		<div class="form-group ">
				<form name="f1" action="login.proc.php" method="get">
					<input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
			</div>
				    <div class="form-group">
				       <input type="password" name="pass" class="form-control" placeholder="Contraseña">
				       <i class="fa fa-lock"></i>
				    </div>
    				<button type="submit" class="log-btn" name="acce">Entrar</button>
     				<button type="button" class="sign-btn" onclick="window.location.href='usuarios_insert.php'">Registrarme</button>  
     				<button type="button" class="sign-btn" onclick="window.location.href='donaciones.php'">Donaciones</button>  
				</form>
			</div>
		</div>
		<?php
		echo "<div class='log-error'>";
			if(isset($error)){
				echo "ERROR: " . $error;
				echo "<br/><br/>";
			}
		echo "</div>";
		?>		
	</body>
</html>