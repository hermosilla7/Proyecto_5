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
  	<div class="titleact">
  		<h1>Contáctanos</h1>
    </div>
    <div class="regis">
    	<p>Para cualquier duda o sugerencia rellena este formulario de contacto. Estudiaremos tu caso e intentaremos ponernos en contacto contigo lo antes posible. Gracias por la paciencia.</p>
	</div>
	
	
	<div class="form-group ">
		<form name="f1" action="contacto.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();"><br /></br />
			<div class="form-grouptxt">
				<textarea id="txtArea" rows="10" cols="55" placeholder="Déjanos tu sugerencia o consulta..." required></textarea>
			</div>
			<div class="mod-form3">
				<div class="form-group">
					<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" placeholder="Nombre" required <?php if(isset($nom_user)){ echo "value = '".$nom_user."'"; } ?>><br />
				</div>
				<div class="form-group">
					<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required <?php if(isset($apellidos)){ echo "value = '".$apellidos."'"; } ?>><br />
				</div>
				<div class="form-group">
					<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Formato en minúsculas. Ejemplo: info@gmail.com" required <?php if(isset($mail)){ echo "value = '".$mail."'"; } ?>><br />
				</div>
				<div class="form-group">
					<i class="fa fa-phone"></i><input type="text" name="telefono" class="form-control" placeholder="Teléfono" pattern="[0-9]{9}" title="Formato correcto: 618589666" required <?php if(isset($telf)){ echo "value = '".$telf."'"; } ?>><br />
				</div>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Enviar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</div>
		</form>
	</div>
	<div class="espacio">
	</div>
<?php
	include 'footer.php';
?>