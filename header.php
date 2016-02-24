<div class="header">
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
</ul>
</div>