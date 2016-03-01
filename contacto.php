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
				// alert("Las contraseñas no coinciden");
				enviar=false;
			}

			return enviar;
		}
	</script>

	<div class="mod-form">
		<h1>Registro</h1>
 		<div class="form-group ">
			<form name="f1" action="contacto.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
			<br></br>
			Para cualquier duda o sugerencia rellena este formulario de contacto. Estudiaremos tu caso e intentaremos ponernos en contacto contigo lo antes posible. Gracias por la paciencia.
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
					<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required><br>
				</div>
				<div class="form-group">
					​<textarea id="txtArea" rows="10" cols="70" placeholder="Déjanos tu sugerencia o consulta..." required></textarea>
				</div>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>