<?php
    include 'header.php';

    $consulta_actividades = "SELECT actividad.nombre, actividad.descripcion, actividad.fecha, actividad.direccion, actividad.ubicacion_lat, actividad.ubicacion_lon, tipo_actividad.id AS 'idact', tipo_actividad.nombre AS 'ntact' FROM actividad INNER JOIN tipo_actividad ON actividad.id_tipo_actividad = tipo_actividad.id WHERE actividad.id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);
    $act = mysqli_fetch_array($result_actividades);

    $consulta_tipo = "SELECT * FROM tipo_actividad";
    $result_tipo = mysqli_query($con, $consulta_tipo);
?>

	<div class="titleact">
  		<h1>Modificar actividad</h1>
    </div>
<<<<<<< HEAD

	<div class="mod-form">
		<div class="form-group ">

=======
	
	<div class="mod-form">
		<div class="form-group ">
>>>>>>> 30a394981dc4cc94406b0425cd90eb4acafa4fdc
			<form name="f1" action="modificar_actividad.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<input type="hidden" name="actividad" value="<?php echo $_REQUEST[actividad]; ?>">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required value="<?php echo utf8_encode($act['nombre']);  ?>" ><br>
					</div>
					<div class="form-group">
						<textarea name="descripcion" class="form-control" placeholder="Descripción" required ><?php echo utf8_encode($act['descripcion']);  ?></textarea><br>
					</div>
					<div class="form-group">
						<input type="datetime" name="fecha" class="form-control" placeholder="Fecha/hora" required value="<?php echo utf8_encode($act['fecha']);  ?>" ><br>
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
					<select id="selects" name="id_tipo_actividad">
						<option value="">Seleccionar actividad</option>
						<?php
							while($act2=mysqli_fetch_array($result_tipo)){
								if($act['idact'] == $act2['id']){
									echo utf8_encode("<option value='".$act2['id']."' selected>".$act2['nombre']."</option>");
								} else {
									echo utf8_encode("<option value='".$act2['id']."'>".$act2['nombre']."</option>");
<<<<<<< HEAD
								}
=======
								}							
>>>>>>> 30a394981dc4cc94406b0425cd90eb4acafa4fdc
							}
			        	?>
				    </select><br /><br />
					<div class="form-group">
						<input type="file" name="foto" id="foto" class="form-control"></br><br>
					</div>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
					<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
				</form>
		</div>
	</div>


<?php
    include 'footer.php';
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 30a394981dc4cc94406b0425cd90eb4acafa4fdc
