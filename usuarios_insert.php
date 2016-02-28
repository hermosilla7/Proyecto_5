<?php
	include 'header.php';
?>

	<script>
		function valEmail(valor){
			re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*[.]([a-z]{2,3})$/
			if(!re.exec(valor)) {
				return false;
			}else{
				return true;
			}
		}

		function validar(){
			enviar=false;
			if(f1.pass.value==f1.repass.value){
				if(valEmail(f1.correo.value)){
					enviar=true;
				} else {
					alert("El email " + f1.correo.value + " es incorrecto.");
					enviar=false;
				}
			} else {
				alert("Las contraseñas no coinciden");
				enviar=false;
			}

			return enviar;
		}
	</script>

	<div class="mod-form">
		<h1>Registro</h1>
 		<div class="form-group ">
			<form name="f1" action="usuarios_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="correo" class="form-control" placeholder="Correo" required><br>
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="Contraseña" required><br>
				</div>
				<div class="form-group">
					<input type="password" name="repass" class="form-control" placeholder="Repetir contraseña" required><br>
				</div>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>