<?php
    include 'header.php';

    $consulta_actividades = "SELECT actividad.nombre, actividad.descripcion, actividad.fecha, , tipo_actividad.* FROM actividad INNER JOIN tipo_actividad ON actividad.id_tipo_actividad = tipo_actividad.id WHERE actividad.id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);
    $act = mysqli_fetch_array($result_actividades);
?>

	<div class="titleact">
  		<h1>Modificar actividad</h1>
    </div>
	
	
	<div class="form-group ">
		<form name="f1" action="ofrezco_necesito_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" required value="<?php echo utf8_encode($act['nombre']);  ?>" ><br>
				</div>
				<div class="form-group">
					<textarea name="descripcion" class="form-control" placeholder="Descripción" required ><?php echo utf8_encode($act['descripcion']);  ?></textarea><br>
				</div>
				<div class="form-group">
					<input type="datetime-local" name="fecha" class="form-control" placeholder="Fecha/hora" required value="<?php echo utf8_encode($act['fecha']);  ?>" ><br>
				</div>
				<div class="form-group">
					<input type="text" name="direccion" class="form-control" placeholder="Dirección" value="<?php echo utf8_encode($act['direccion']);  ?>" ><br>
				</div>
				<div class="form-group">
					<input type="text" name="ubicacion_lat" class="form-control" placeholder="Latitud" value="<?php echo utf8_encode($act['ubicacion_lat']);  ?>" ><br>
				</div>
				<div class="form-group">
					<input type="text" name="ubicacion_lon" class="form-control" placeholder="Longitud" value="<?php echo utf8_encode($act['ubicacion_lon']);  ?>"><br>
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
					while($fila=mysqli_fetch_array($result_actividades)){
						echo utf8_encode("<option value=\"$fila[id]\">$fila[nombre]</option>");
					}
		        	?>
			    </select></br><br>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</form>
	</div>


<?php
    include 'footer.php';
?>