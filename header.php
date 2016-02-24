<div class="header">
	<div class="login-form">
		<div class="prin-img" align="middle" style="margin-bottom: 10px;"></div>
	 		<div class="form-group ">
	 			<?php
	 				if(!isset($_SESSION['id'])){

	 			?>
				<form name="f1" action="login.proc.php" method="get">
					<input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
			</div>
    		<div class="form-group">
       			<input type="password" name="pass" class="form-control" placeholder="Contraseña">
   				<i class="fa fa-lock"></i>
	    	</div>
			<button type="submit" class="log-btn" name="acce">Entrar</button>
			<button type="button" class="sign-btn" onclick="window.location.href='usuarios_insert.php'">Registrarme</button>
				</form>
		
				<?php 
					} else {
				?>
				
	            <input type="image" src="img/<?php echo $foto ?>"style="width: 68px; height: 68px;">
	            
	            <h3><?php echo "Bienvenido " .$nom_user?></h3>
	            <input type="image" src="img/off.png" onclick="window.location.href='logout.proc.php'">
	            <input type="image" src="img/baja.png" onclick="confirmar()">
	            <input type="image" src="img/edit.png" onclick="window.location.href='usuarios_modificar.php'"></br>
				<?php
					}
				?>
		</div>
		<div class="logo">
			<img src="img/LOGO2_120px.png" />
		</div>
		<div class="title">
			<h1>Nunca es demasiado tarde</h1>
		</div>
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
<div class="menu">	
	<ul>
	  	<li><a href="index.php">Inicio</a></li>
	  	<li><a href="#news">News</a></li>
	  	<li><a href="#contact">Contact</a></li>
	  	<li><a href="actividades.php">Actividades</a></li>
  		<li><a href="donaciones.php">Donaciones</a></li>
	</ul>
</div>