<?php
	include 'header.php';
	$consulta_actividad = ("SELECT * FROM tipo_actividad");
	$result_actividad = mysqli_query($con, $consulta_actividad);
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
			<form name="f1" action="ofrezco_necesito_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<br></br><br></br>
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="descripcion" class="form-control" placeholder="Descripción" required><br>
				</div>
				<div class="form-group">
					<input type="datetime-local" name="fecha" class="form-control" placeholder="Fecha/hora" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="direccion" class="form-control" placeholder="Dirección"><br>
				</div>
				<div class="form-group">
					<input type="text" name="ubicacion_lat" class="form-control" placeholder="Latitud"><br>
				</div>
				<div class="form-group">
					<input type="text" name="ubicacion_lon" class="form-control" placeholder="Longitud"><br>
				</div>
				<div class="form-group">
					<input type="number" name="compensacion" class="form-control" placeholder="Compensación" required><br>
				</div>
				<input id="radio" type="radio" name="peticion" <?php if( $user['nivel'] == '0' ) { ?>checked="checked"<?php } ?> value='0' >Ofrezco</br><br>		
				<input id="radio" type="radio" name="peticion" <?php if( $user['nivel'] == '1' ) { ?>checked="checked"<?php } ?> value='1' >Necesito</br><br>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
							<!-- TIPO ACTIVIDAD -->
				<select id="selects" name="id_tipo_actividad">
					<option value="">Seleccionar actividad</option>
					<?php
					while($fila=mysqli_fetch_array($result_actividad)){
						echo utf8_encode("<option value=\"$fila[id]\">$fila[nombre]</option>");
					}
		        	?>
			    </select></br><br>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>