<?php
	include 'header.php';

	$sql = "SELECT * FROM tipo_actividad";
	$result = mysqli_query($con, $sql);

?>
   <div class="titleact">
        <h1>Creación de eventos</h1>
    </div>
	<div class="mod-form">
 		<div class="form-group ">
			<form name="f1" action="ofrezco_necesito_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
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
				<input id="radio" type="radio" name="peticion" <?php if( $user['nivel'] == '0' ) { ?>checked="checked"<?php } ?> value='0' >Ofrezco</br><br>
				<input id="radio" type="radio" name="peticion" <?php if( $user['nivel'] == '1' ) { ?>checked="checked"<?php } ?> value='1' >Necesito</br><br>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
							<!-- TIPO ACTIVIDAD -->
				<select id="selects" name="id_tipo_actividad">
					<option value="">Seleccionar actividad</option>
					<?php
					while($fila=mysqli_fetch_array($result)){
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
