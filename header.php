<?php
	session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$foto = $_SESSION['img'];
	$nom_user = $_SESSION['nombre'];
	$apellidos = $_SESSION['apellidos'];
	$telf = $_SESSION['telefono'];
	$mail = $_SESSION['mail'];
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

		<script type="text/javascript" src="js/funciones.js"></script>

		<!-- MAPA WEB -->
		<script type="text/javascript" src="js/maps.js"></script>

		<!-- ESTILOS Y FAVICON -->
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>

		<!-- JQUERY -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Crunchify's Scroll to Top Script -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		</script>
 
		<script>            
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.crunchify-top').fadeIn(duration);
					} else {
					jQuery('.crunchify-top').fadeOut(duration);
				}
			});
 
			jQuery('.crunchify-top').click(function(event) {
				event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
				})
			});
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
							<i class="fa fa-at"></i><input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
						</div>
			    		<div class="form-group">
			       			<i class="fa fa-lock"></i><input type="password" name="pass" class="form-control" placeholder="Contraseña">
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
							<?php
								if($foto==null){
									echo '<input type="image" src="img/avatar/nodisponible.jpg" style="width: 68px; height: 68px;">';
								}else {
									echo '<input type="image" src="img/avatar/'.$foto.'" style="width: 68px; height: 68px;">';
								}
							 ?>
			            </div>
			            <div class="logologin">
				            <a href="logout.proc.php"><i class="fa fa-power-off fa-2x"></i></a>
							<a href="#" onclick="confirmar();"><i class="fa fa-user-times fa-2x"></i></a>
							<a href="usuarios_modificar.php"><i class="fa fa-pencil-square-o fa-2x"></i></a>
			            </div>

					<?php
						}
					?>
			 </div>
			<div class="logo">
				<a href="index.php"><img src="img/logo150px.png" /></a>
			</div>
			<div class="title">
				<h1>Hoy por tí, mañana por mí</h1>
			</div>
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
			  	<?php
			  		if(isset($_SESSION['id'])){
			  	?>
		  		<li><a href="donaciones.php">Donaciones</a></li>
		  		<?php
		  			}

		  			if($_SESSION['nivel'] == 2){
		  		?>
		  		<li><a href="usuarios.php">ABC Usuarios</a></li>
		  		<li><a href="consulta_donaciones.php">Saldo</a></li>
		  		<?php
		  			}
		  		?>
			</ul>
		</div>
