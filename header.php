<?php
	session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$foto = $_SESSION['img'];
	$nom_user=$_SESSION['nombre'];
	include 'conexion.proc.php';
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- TITULO PAGINA -->
		<title>Més de 65</title>

		<!-- PROPIEDADES META WEB -->
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="description" content="Página web més de 65">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"/>
		

		<!-- ESTILOS Y FAVICON -->
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>

		<!-- JQUERY -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- BOOTSTRAP -->
		<!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>-->

		<!-- BOOTSTRAP VALIDATOR -->
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css">
		<script type="text/javascript" src="js/bootstrapValidator.js"></script>-->


		<script>
                function confirmar(){
                    var txt;
                    var r = confirm("¿Quieres darte de baja?");
                    if (r == true){
                        location.href = "usuarios_baja.proc.php";
                    }else{
                        //no hará nada
                    }
                }
            </script>
	</head>
	<body>
		<div class="header">
			<div class="login-form">
				<div class="prin-img" align="middle" style="margin-bottom: 10px;"></div>
		 			<?php
		 				if(!isset($_SESSION['id'])){
		 			?>
					<form id="f1" name="f1" action="login.proc.php" method="get">
						<div class="form-group ">
							<input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
						</div>
			    		<div class="form-group">
			       			<input type="password" name="pass" class="form-control" placeholder="Contraseña">
			   				<i class="fa fa-lock"></i>
				    	</div>
				    	<?php
							echo "<div class='log-error'>";
								if(isset($_SESSION['error'])){
									echo "ERROR: " . $_SESSION['error'];
									echo "<br/><br/>";
								}
							echo "</div>";
						?>
						<button type="submit" class="log-btn" name="acce">Entrar</button>
						<button type="button" class="sign-btn" onclick="window.location.href='usuarios_insert.php'">Registrarme</button>
					</form>
				
					<?php 
						} else {
					?>
						<h3><?php echo "Bienvenido " .$nom_user?></h3>
						<?php
			            	echo "Monedas: ".$_SESSION['monedas']." $";
			            ?>
						<div class="perfilimg">
			            	<input type="image" src="img/<?php echo $foto ?>"style="width: 68px; height: 68px;">
			            </div>
			            <div class="logologin">
				            <input type="image" src="img/off.png" onclick="window.location.href='logout.proc.php'">
				            <input type="image" src="img/baja.png" onclick="confirmar()">
				            <input type="image" src="img/edit.png" onclick="window.location.href='usuarios_modificar.php'">
			            </div>
	            </div>
					<?php
						}
					?>
			</div>
			<div class="logo">
				<img src="img/logo150px.png" />
			</div>
			<div class="title">
				<h1>Nunca es demasiado tarde</h1>
			</div>
		</div>	
		<div class="menu">	
			<ul>
			  	<li><a href="index.php">Inicio</a></li>
			  	<?php
			  		if(isset($_SESSION['id'])){
		  		?>
			  	<li><a href="actividades.php">Mis anuncios</a></li>
			  	<?php
			  		}
			  	?>
			  	<li><a href="contacto.php">Contacto</a></li>
		  		<li><a href="donaciones.php">Donaciones</a></li>
		  		<?php
		  			if($_SESSION['nivel'] == 2){
		  		?>
		  		<li><a href="usuarios.php">ABC Usuarios</a></li>
		  		<li><a href="consulta_donaciones.php">Saldo</a></li>
		  		<?php
		  			}
		  		?>
			</ul>
		</div>