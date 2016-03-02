<?php
	include 'header.php';
?>

	<div class="mod-form">
		<h1>Registro</h1>
 		<div class="form-group ">
			<form name="f1" action="usuarios_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group"><br/>
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" maxlength="30" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="apellidos" class="form-control" placeholder="Apellidos"  maxlength="50"required><br>
				</div>
				<div class="form-group">
					<input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Formato en minúsculas. Ejemplo: info@gmail.com"  maxlength="75"required><br>
				</div>
				<div class="form-group">
					<input name="telefono" type="tel" pattern="[0-9]{9}" placeholder="Telefono"  maxlength="9" required title="Formato correcto: 618589666">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Contraseña" maxlength="50" required><br>
				</div>
				<div class="form-group">
					<input type="password" name="repass" class="form-control" placeholder="Repetir contraseña"  maxlength="50" required><br>
				</div>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
				<input type="hidden" name="activo" value="1"></br>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</form>
		</div>
	</div>
	
<?php
	include 'footer.php';
?>
