<?php
	include 'header.php';
?>
<div class="titleact">
        <h1>Registro</h1>
    </div>
	<div class="mod-form4">

 		<div class="form-group ">
			<form name="f1" action="usuarios_insert.proc.php" method="get" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group"><br/>
					<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" placeholder="Nombre" maxlength="30" required><br>
				</div>
				<div class="form-group">
					<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" placeholder="Apellidos"  maxlength="50"required><br>
				</div>
				<div class="form-group">
					<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Formato en minúsculas. Ejemplo: info@gmail.com"  maxlength="75"required><br>
				</div>
				<div class="form-group">
					<i class="fa fa-phone"></i><input name="telefono" type="tel" pattern="[0-9]{9}" placeholder="Telefono"  maxlength="9" required title="Formato correcto: 618589666">
				</div>
				<div class="form-group">
					<i class="fa fa-newspaper-o"></i><input name="dni" id="dni"type="text" pattern="(\d{8})([-]?)([A-Z]{1})" placeholder="Dni"  maxlength="9" required title="Formato correcto: 088523548A ó 46452311G" onblur="validardni()">
				</div>
				<div class="form-group">
					<i class="fa fa-lock"></i><input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" maxlength="50" required><br>
				</div>
				<div class="form-group">
					<i class="fa fa-lock"></i><input type="password" id="repass" name="repass" class="form-control" placeholder="Repetir contraseña"  maxlength="50" onblur="validapass()" required><br>
				</div>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
				<input type="hidden" name="activo" value="1"></br>
				<button type="submit" class="log-btn" onclick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onclick="window.location.href='index.php'">Volver</button>
			</form>
		</div>
	</div>
	
	<div class="espacio">
	</div>
<?php
	include 'footer.php';
?>
